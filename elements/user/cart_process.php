<?php
session_start();

include_once ('../../vendor/autoload.php');

$qyt = 1;
echo $qyt;
$productID = $_POST['id'];
echo $productID;

try {
    $conn = new PDO("mysql:host=localhost;dbname=vehicle_service", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully";*/
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM `product` WHERE `product_id` = '$productID'";
$stmt = $conn->prepare($query);
$result = $stmt->execute();
$products = $stmt->fetch();
echo $products;

$cost = $products['price'] * $qyt;
echo $cost;

$name = $products['product_name'];
$picture = $products['picture'];
$productID = $products['product_id'];
$shop_id = $products['shop_owner_id'];
$price = $products['price'];
$total_cost = $cost;

$user = "SELECT * FROM `user_reg` WHERE `username` = '".$_SESSION['username']."'";
$stmt = $conn->prepare($user);
$res = $stmt->execute();
$userAll = $stmt->fetch();

$userID = $userAll['id'];
$username = $userAll['username'];

$duplicateValueQuery= "SELECT `product_id`,`quantity`,`total_price` FROM `cart` where `product_id`= '$productID'";
$valueStmt = $conn->prepare($duplicateValueQuery);
$result = $valueStmt->execute();
$duplicateValues = $valueStmt->fetchAll();

$length =  count($duplicateValues);

foreach ($duplicateValues as $duplicateValue) {
    $changeQuantity = $duplicateValue['quantity'] + $qyt;
    $changePrice = $duplicateValue['total_price'] + $cost;
}

if ($length == 0){
    $cartQuery="INSERT INTO `cart` (`product_name`, `product_id`,`product_picture`,`price`,`quantity`,`total_price`,`username`,`user_id`,`shop_id`) VALUES ('$name','$productID','$picture','$price','$qyt','$total_cost','$username','$userID','$shop_id')";

    $stmt = $conn->prepare($cartQuery);
    $stmt->bindParam(':product_name' , $name);
    $stmt->bindParam(':product_id' ,$productID);
    $stmt->bindParam(':shop_id' ,$shop_id);
    $stmt->bindParam(':price' ,$price);
    $stmt->bindParam(':quantity' ,$qyt);
    $stmt->bindParam(':total_price' ,$total_cost);
    $stmt->bindParam(':username' ,$username);
    $resultInsert = $stmt->execute();


    /*header("location:../../../front/user/cart.php");*/

}
else{
    $QuantityUpdateQuery=" UPDATE `cart` SET `quantity` = '$changeQuantity', `total_price` = '$changePrice' WHERE `cart`.`product_id` = '$productID'";
    $stmt = $conn->prepare($QuantityUpdateQuery);
    $result = $stmt->execute();
    /*header("location:../../../front/user/cart.php");*/

}