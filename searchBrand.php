<?php

require 'connect.php';
$searchTitle = $_GET['search'];
$sql = "SELECT *
FROM Brand WHERE title LIKE '%$searchTitle%'";

$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);