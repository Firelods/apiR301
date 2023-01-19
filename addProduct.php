<?php 
require 'connect.php';
$title = $_POST['title'];
$description = $_POST['description'];
$publicPrice = floatval($_POST['publicPrice']);
$purchasePrice = floatval($_POST['purchasePrice']);
$imageURL = $_POST['imageURL'];
$brand = $_POST['brand'];

$getbrandId = "SELECT id FROM Brand WHERE title=:brand";
$query = $con->prepare($getbrandId);
$query->execute(['brand' => $brand]);
$brandId = $query->fetchAll(PDO::FETCH_ASSOC)[0]['id'];

// echo json_encode($brandId);

$sql = "INSERT INTO Product (title, descriptionProduct, publicPrice, purchasePrice, imageURL, brand, note) VALUES (:title, :description, :publicPrice, :purchasePrice, :imageURL, :brandId, 2.5)";
$query = $con->prepare($sql);
$query->execute(['title' => $title, 'description' => $description, 'publicPrice' => $publicPrice, 'purchasePrice' => $purchasePrice, 'imageURL' => $imageURL, 'brandId' => $brandId]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$message = array(
    "message" => "Product added database"
);
echo json_encode($message);