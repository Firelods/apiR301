<?php
require 'connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$sql = "SELECT billingDate, amountHT, amountTTC FROM Billing ORDER BY billingDate DESC";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
