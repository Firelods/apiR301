<?php

require 'vendor/autoload.php';
require 'stripeApiKey.php';
require 'connect.php';
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
    echo 'Received unknown event type ' . $event->type;
}

$mailClient= $checkoutSession->metadata->client_email;

// search for idClient with email
$sql = " SELECT id FROM Client WHERE email = \"$mailClient\"";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$idClient= $result[0]['id'];


function searchForIdCart($con, $idClient)
{
    $sql = "SELECT * FROM Cart WHERE idClient = '" . $idClient . "' AND active = 1";
    $query = $con->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
print_r(searchForIdCart($con, $idClient));
// Insert into table Billing with idClient and idCart and amountHT and amountTTC and billingDate
$sql = "INSERT INTO   Billing (idClient, idCart, amountHT, amountTTC, billingDate) VALUES ($idClient, " . searchForIdCart($con, $idClient)[0]['id'] . ", " . $checkoutSession->amount_subtotal / 100 . ", " . $checkoutSession->amount_total / 100 . ", '" . date("Y-m-d") . "')";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Update Cart with active = 0
$sql = "UPDATE Cart SET active = 0 WHERE idClient = $idClient AND active = 1";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
http_response_code(200);