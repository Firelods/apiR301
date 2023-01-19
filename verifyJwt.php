<?php
require './vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

//collect jwt from the http request header
$jwt = $_SERVER['HTTP_ACCESS_TOKEN'];

//check if jwt is not empty
if ($jwt) {
    //set key
    $key = "Clement83";
    //decode jwt
    try {
        $decoded = JWT::decode($jwt,new Key($key, 'HS256'));
        //access is granted
        
    } catch (Exception $e) {
        //access is denied
        echo json_encode(
            array(
                "message" => "Access denied",
                "error" => $e->getMessage()
            )
        );
        die();
    }
} else {
    //if jwt is empty
    //access is denied
    echo json_encode(
        array(
            "message" => "Access denied",
            "error" => "Access denied"
        )
    );
    die();
}