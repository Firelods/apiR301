<?php
require 'connect.php';
require './vendor/autoload.php';
require 'mail.php';
use Firebase\JWT\JWT;
require_once('mailgun.php'); 
//print errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['firstName']) && isset($_POST['password']) && isset($_POST['surname']) && isset($_POST['email'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['password']) && !empty($_POST['surname']) && !empty($_POST['email'])) {
        $firstname = $_POST['firstName'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
        $query = "SELECT `id` FROM `Client` WHERE email = :email";
        $queryPrepare = $con->prepare($query);
        $queryPrepare->execute(['email' => $email]);
        $result = $queryPrepare->fetchAll(PDO::FETCH_ASSOC);
        if (count($result) > 0) {
            echo json_encode(
                array(
                    "message" => "User firstname already exists",
                )
            );
        } else {
            $query = "INSERT INTO `Client` ( `firstname`, `passwordHash`, `email`, `surname`) VALUES (:firstname, :passwordHashed, :email, :surname)";
            $queryPrepare = $con->prepare($query);
            $queryPrepare->execute(['firstname' => $firstname, 'passwordHashed' => $passwordHashed, 'email' => $email, 'surname' => $surname]);
            $key = "Clement83";
            $token = array(
                "email" => $email,
                "iat" => new DateTime(),
                "exp" => new DateTime("+2 hour")
            );
            $jwt = JWT::encode($token, $key, 'HS256');
            echo json_encode(
                array(
                    "message" => "User registered successfully",
                    "jwt" => $jwt
                )
            );
            sendMail($email, $firstname,$MAIL_GUN_API_KEY);
        }
    }
    else{
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