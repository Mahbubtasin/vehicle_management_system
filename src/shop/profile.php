<?php


namespace University\shop;

use University\db;
class profile
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }
    public function showProfile()
    {
        $profile = "SELECT * FROM `shop_owner` WHERE `shop_owner_id` = '".$_SESSION['shop_owner_id']."'";
        $stmt = $this->conn->prepare($profile);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function profileUpdate()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $password_1 = $_POST['repeat_password'];
        $shop_name = $_POST['shop_name'];
        $street_address = $_POST['street_address'];
        $thana = $_POST['thana'];
        $state = $_POST['state'];
        $mobile = $_POST['phone'];

        $update = "UPDATE `shop_owner` SET `first_name` = '$first_name',`last_name` = '$last_name',`password` = '$password',`repeat_password` = '$password_1',`shop_name` = '$shop_name',`street_address` = '$street_address',`thana` = '$thana',`state` = '$state',`phone` = '$mobile' WHERE `shop_owner_id` = '".$_SESSION['shop_owner_id']."'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first_name',$first_name);
        $stmt->bindParam(':last_name',$last_name);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':repeat_password',$password_1);
        $stmt->bindParam(':shop_name',$shop_name);
        $stmt->bindParam(':street_address',$street_address);
        $stmt->bindParam(':thana',$thana);
        $stmt->bindParam(':state',$state);
        $stmt->bindParam(':phone',$mobile);
        $result = $stmt->execute();

        return $result;
    }
}