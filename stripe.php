<?php

require 'vendor/autoload.php';
require 'connect.php';
require 'stripeApiKey.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey($stripeApiKey);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://seinksansdoozebank.engineer/payment';

$emailClient = $_POST['mailCustomer'];

//make a select query on all cartItem
$sql = "SELECT
*
FROM CartItem 
INNER JOIN Cart ON Cart.id = CartItem.idCart 
INNER JOIN Client ON Client.id = Cart.idClient
INNER JOIN Product ON Product.id = CartItem.idProduct
WHERE Client.email = :emailClient
AND Cart.active = 1";
$query = $con->prepare($sql);
$query->execute(['emailClient' => $emailClient]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$line_items = array();
foreach ($result as $row) {
    $line_items[] = array(
        'price_data' => array(
            'currency' => 'eur',
            'product_data' => array(
                'name' => $row['title'],
            ),
            'unit_amount' => ($row['publicPrice'] * 100),
        ),
        'quantity' => $row['quantity'],
    );
}


$checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => $line_items,
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '?success=true',
    'cancel_url' => $YOUR_DOMAIN . '?canceled=true',
    'metadata' => [
        'client_email'=> $emailClient
        // 'client_name' =>"John Doe"
],
]);

// header("HTTP/1.1 303 See Other");

$message = array(
    "url" => $checkout_session->url
);
echo json_encode($message);
// header("Location: " . $checkout_session->url);