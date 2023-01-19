<?php
require 'connect.php';
$emailClient = $_GET['emailClient'];

//make a select query on all cartItem
$sql = "SELECT
quantity,
idProduct
FROM CartItem 
INNER JOIN Cart ON Cart.id = CartItem.idCart 
INNER JOIN Client ON Client.id = Cart.idClient
WHERE Client.email = :emailClient
AND Cart.active = 1";


$query = $con->prepare($sql);
$query->execute(['emailClient' => $emailClient]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);