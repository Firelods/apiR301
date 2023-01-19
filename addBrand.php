<?php 
require 'connect.php';
$title = $_POST['title'];
$description = $_POST['description'];
$link = $_POST['link'];
$imageURL = $_POST['imageURL'];

// insert into brand
$sql = "INSERT INTO Brand (title, description, link, imageURL) VALUES (:title, :description, :link, :imageURL)";
$query = $con->prepare($sql);
$query->execute(['title' => $title, 'description' => $description, 'link' => $link, 'imageURL' => $imageURL]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);


$message = array(
    "message" => "Brand added database"
);
echo json_encode($message);