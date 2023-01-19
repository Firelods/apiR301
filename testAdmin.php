<?php
require 'verifyJwt.php';

if (!$decoded->admin){
    echo json_encode(array("message" => "You are not an admin"));
    die();
}