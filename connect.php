<?php
require_once('dbpass.php');
// db credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'ClementExte');

define('DB_PASS', $dbpass);
define('DB_NAME', '512Database');

// Connect with the database.
function connect()
{
  //   $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME); // don't use mysqli
  // use pdo instead
  $connect = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
  //make pdo utf 8
  $connect->exec("set names utf8");
  return $connect;
}

$con = connect();