<?php
require 'connect.php';
require 'testAdmin.php';

//display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sql = "SELECT Product.title,
Brand.title as brand,
Product.descriptionProduct,
Product.id,
Product.imageURL,
Product.purchasePrice,
Product.publicPrice,
Product.note
FROM Product
INNER JOIN Brand ON Product.brand = Brand.id
INNER JOIN StockManagement ON Product.id = StockManagement.idProduct
WHERE StockManagement.quantity < StockManagement.criticalQuantity";

$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);