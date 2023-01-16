<?php
require 'connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
function searchForIdCart($con, $idClient)
{
    $sql = "SELECT * FROM Cart WHERE idClient = '" . $idClient . "' AND active = 1";
    $query = $con->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

if (isset($_POST['idProduct']) && isset($_POST['quantity']) && isset($_POST['mailCustomer'])) {
    // if no cart exists for this customer, create one only if user exists
    $sql = "SELECT * FROM Client WHERE email = '" . $_POST['mailCustomer'] . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) == 0) {
        echo "User does not exist";
        return;
    }
    $idClient = $result[0]["id"];
    //search the idCart of the customer
    $result = searchForIdCart($con, $idClient);
    if (count($result) == 0) {
        $sql = "INSERT INTO `Cart` (`idClient`) VALUES ('" . $idClient . "')";
        $query = $con->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    $result = searchForIdCart($con, $idClient);
    $idCart = $result[0]["id"];
    // if idProduct already exists in CartItem, update quantity
    $sql = "SELECT * FROM CartItem WHERE idProduct = " . $_POST['idProduct'] . " AND idCart = " . $idCart;
    $query = $con->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        if (($result[0]["quantity"] - $_POST['quantity']) <= 0) {
            $sql = "DELETE FROM CartItem WHERE idProduct = " . $_POST['idProduct'] . " AND idCart = " . $idCart;
            $query = $con->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $message = array(
                "message" => "Product deleted from cart"
            );
            echo json_encode($message);
            return;
        }
        $sql = "UPDATE CartItem SET quantity = " . ($result[0]["quantity"] - $_POST['quantity']) . " WHERE idProduct = " . $_POST['idProduct'] . " AND idCart = " . $idCart;
        $query = $con->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $message = array(
            "message" => "Product deleted from cart"
        );
        echo json_encode($message);
        return;
    } else {
        $message = array(
            "message" => "Product not in cart"
        );
        echo json_encode($message);
    }



} else {
    echo "Please fill all fields";
}