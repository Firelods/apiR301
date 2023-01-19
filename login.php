<?php
require 'connect.php';
require './vendor/autoload.php';
use Firebase\JWT\JWT;

//print errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        //check if user exist
        $queryExistUser = "SELECT * FROM `Client` WHERE email=:email";
        $queryPrepare = $con->prepare($queryExistUser);
        $queryPrepare->execute(['email' => $email]);
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
                $today=new DateTime();
                $plus2hour=new DateTime("+2 hour");
                $token = array(
                    "email" => $email,
                    "firstName" => $result[0]["firstName"],
                    "surname" => $result[0]["surname"],
                    "iat" => strtotime($today->format('Y-m-d H:i:s')),
                    "exp" => strtotime($plus2hour->format('Y-m-d H:i:s')),
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
        echo json_encode(
            array(
                "message" => "Please fill all fields correctly",
            )
        );
    }
} else {
    print_r($_POST);
    echo json_encode(
        array(
            "message" => "Please fill all fields",
        )
    );
}