<?php

require 'connect.php';
$searchTitle = $_GET['search'];
$sql = "SELECT *
FROM Brand WHERE title LIKE CONCAT('%', :searchTitle, '%')";

$query = $con->prepare($sql);
$query->execute(['searchTitle' => $searchTitle]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);