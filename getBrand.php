<?php 
require 'connect.php';

$brand =$_GET['brand'];
$sql = "SELECT * FROM Brand WHERE title=\"$brand\"";

$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);