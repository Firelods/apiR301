<?php
require 'connect.php';
$productId = $_GET['id'];
$sql = "SELECT Product.title,
Brand.title as brand,
Product.descriptionProduct,
Product.id,
Product.imageURL,
Product.purchasePrice,
Product.publicPrice,
Product.note
FROM Product
INNER JOIN Brand ON Product.brand = Brand.id WHERE Product.id = $productId";

$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result[0]);