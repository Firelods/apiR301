<?php
require 'connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$id = $_POST['id'];

$sql="DELETE FROM Product WHERE id=\"$id\"";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);