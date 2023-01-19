<?php
require 'connect.php';
require 'testAdmin.php';



$id = $_POST['id'];

$sql="DELETE FROM Brand WHERE id=:id";
$query = $con->prepare($sql);
$query->execute(['id' => $id]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);