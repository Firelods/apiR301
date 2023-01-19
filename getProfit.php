<?php
require 'connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$sql = "SELECT SUM(amountHT) FROM Billing";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$total = $result[0]['SUM(amountHT)'];
echo json_encode($total);