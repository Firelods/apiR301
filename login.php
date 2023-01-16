<?php
require 'connect.php';
require './vendor/autoload.php';
use Firebase\JWT\JWT;

//print errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    //check if user exist
    $queryExistUser = "SELECT * FROM `Client` WHERE email='$email'";
    $queryPrepare = $con->prepare($queryExistUser);
    $queryPrepare->execute();
    $result = $queryPrepare->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) == 0) {
        $messageEror = array(
            "message" => "User don't exist"
        );
        echo json_encode($messageEror);
    } else {
        $passwordHash = $result[0]["passwordHash"];
        if (!password_verify($password, $passwordHash)) {
            $messageEror = array(
                "message" => "Wrong password"
            );
            echo json_encode($messageEror);
        } else {
            //encode email in json web token
            $key = "Clement83";
            $token = array(
                "email" => $email,
                "firstName" => $result[0]["firstName"],
                "surname" => $result[0]["surname"],
                "iat" => new DateTime(),
                "exp" => new DateTime("+2 hour"),
                "admin"=>$result[0]["isAdmin"]
            );
            $jwt = JWT::encode($token, $key, 'HS256');
            echo json_encode(
                array(
                    "message" => "User login successfully",
                    "jwt" => $jwt
                )
            );
        }
    }

} else {
    print_r($_POST);
    echo "Please fill all fields correctly";
}