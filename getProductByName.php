<?php

require 'connect.php';
$searchTitle = $_GET['search'];
$sql = "SELECT Product.title,
Brand.title as brand,
Product.descriptionProduct,
Product.id,
Product.imageURL,
Product.purchasePrice,
Product.publicPrice,
Product.note
FROM Product
INNER JOIN Brand ON Product.brand = Brand.id WHERE Product.title LIKE '%$searchTitle%'";

$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);