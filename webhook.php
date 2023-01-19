<?php

require 'vendor/autoload.php';
require 'stripeApiKey.php';
require 'connect.php';
require 'mail.php';
require 'mailgun.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// This is your Stripe CLI webhook secret for testing your endpoint locally.

\Stripe\Stripe::setApiKey($stripeApiKey);

$payload = @file_get_contents('php://input');
$sig_header=$_SERVER['HTTP_STRIPE_SIGNATURE'];
$event = null;
try {
  $event = \Stripe\Webhook::constructEvent(
    $payload, $sig_header, $endpoint_secret
  );
} catch(\UnexpectedValueException $e) {
  // Invalid payload
  echo 'bad payload ';
  http_response_code(400);
  exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
  // Invalid signature
  echo 'bad signature ';
  http_response_code(400);
  exit();
}

// Handle the event
switch ($event->type) {
  case 'checkout.session.completed':
    $checkoutSession = $event->data->object;
  // ... handle other event types
  default:
  $checkoutSession = $event->data->object;

    echo 'Received unknown event type ' . $event->type;
}

$mailClient= $checkoutSession->metadata->client_email;

// search for idClient with email
$sql = " SELECT id,firstname FROM Client WHERE email =:emailClient";
$query = $con->prepare($sql);
$query->execute(['emailClient' => $mailClient]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$idClient= $result[0]['id'];
$firstNameClient=$result[0]['firstname'];

function searchForIdCart($con, $idClient)
{
    $sql = "SELECT * FROM Cart WHERE idClient = :idClient AND active = 1";
    $query = $con->prepare($sql);
    $query->execute(['idClient' => $idClient]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

$idCart= searchForIdCart($con, $idClient)[0]['id'];
// Insert into table Billing with idClient and idCart and amountHT and amountTTC and billingDate
$sql = "INSERT INTO   Billing (idClient, idCart, amountHT, amountTTC, billingDate) VALUES (:idClient, :idCart, :amountSubTotal, :amountTotal, ':date')";
$query = $con->prepare($sql);
$query->execute(['idClient' => $idClient, 'idCart' => $idCart, 'amountSubTotal' => $checkoutSession->amount_subtotal / 100, 'amountTotal' => $checkoutSession->amount_total/100, 'date' => date('Y-m-d')]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Update Cart with active = 0
$sql = "UPDATE Cart SET active = 0 WHERE idClient = :idClient AND active = 1";
$query = $con->prepare($sql);
$query->execute(['idClient' => $idClient]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Select all product items from CartItem with idCart inner join product to have their name and price
$sql = "SELECT * FROM CartItem INNER JOIN Product ON CartItem.idProduct = Product.id WHERE idCart = :idCart";
$query = $con->prepare($sql);
$query->execute(['idCart' => $idCart]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
//parse result and make array with name and price
$products = [];
foreach ($result as $product) {
    $products[] = $product['title'] . ' ' . $product['publicPrice'] . '€';
}
sendMailOrder($mailClient,$firstNameClient,$products,$MAIL_GUN_API_KEY);
$mailWebMaster = "test@webmaster.com";
sendMailOrder($mailWebMaster,"WebMaster",$products,$MAIL_GUN_API_KEY);


http_response_code(200);