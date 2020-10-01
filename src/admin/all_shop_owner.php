<?php


namespace University\admin;

use University\db;

class all_shop_owner
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function show_shop()
    {
        $shop = "SELECT * FROM `shop_owner`";
        $stmt = $this->conn->prepare($shop);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function delete_shop_owner($data)
    {
        $deleteShop = "DELETE FROM `shop_owner` WHERE `shop_owner_id` = '$data'";
        $stmt = $this->conn->prepare($deleteShop);
        $result = $stmt->execute();
        return $result;
    }

    public function add_shop()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['password'];
        $usertype = $_POST['usertype'];
        $mbl = $_POST['phone'];
        $shop_name = $_POST['shop_name'];
        $address = $_POST['street_address'];
        $thana = $_POST['thana'];
        $state = $_POST['state'];
//        $type = $_POST['type'];
        $latitude = $_POST['lat'];
        $longtude = $_POST['lng'];

        $shop = "INSERT INTO `shop_owner` (`first_name`,`last_name`,`email`,`password`,`repeat_password`,`usertype`,`phone`,`shop_name`,`street_address`,`thana`,`state`,`lat`,`lng`) VALUES ('$first_name','$last_name','$email','$password_1','$password_2','$usertype','$mbl','$shop_name','$address','$thana','$state','$latitude','$longtude')";

        $stmt = $this->conn->prepare($shop);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_1);
        $stmt->bindParam(':repeat_password', $password_2);
        $stmt->bindParam(':usertype', $usertype);
        $stmt->bindParam(':phone', $mbl);
        $stmt->bindParam(':shop_name', $shop_name);
        $stmt->bindParam(':street_address', $address);
        $stmt->bindParam(':thana', $thana);
        $stmt->bindParam(':state', $state);
//        $stmt->bindParam(':type',$type);
        $stmt->bindParam(':lat', $latitude);
        $stmt->bindParam(':lng', $longtude);
        $result = $stmt->execute();
        return $result;
    }

    public function single_shop($shop_owner)
    {
        $singleShop = "SELECT * FROM `shop_owner` WHERE `shop_owner_id` = '$shop_owner'";
        $stmt = $this->conn->prepare($singleShop);
        $res = $stmt->execute();
        $res = $stmt->fetch();
        return $res;
    }

    public function Update_shop($id)
    {
        $id = $_POST['shop_owner_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['password'];
        $usertype = $_POST['usertype'];
        $mbl = $_POST['phone'];
        $shop_name = $_POST['shop_name'];
        $address = $_POST['street_address'];
        $thana = $_POST['thana'];
        $state = $_POST['state'];
        $latitude = $_POST['lat'];
        $longtude = $_POST['lng'];

        $update = "UPDATE `shop_owner` SET `first_name` = '$first_name',`last_name` = '$last_name',`email` = '$email',`password` = '$password_1',`repeat_password` = '$password_2',`usertype` = '$usertype',`phone` = '$mbl',`shop_name` = '$shop_name',`street_address` = '$address',`thana` = '$thana',`state` = '$state',`lat` = '$latitude',`lng` = '$longtude' WHERE `shop_owner_id` = '$id'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_1);
        $stmt->bindParam(':repeat_password', $password_2);
        $stmt->bindParam(':usertype', $usertype);
        $stmt->bindParam(':phone', $mbl);
        $stmt->bindParam(':shop_name', $shop_name);
        $stmt->bindParam(':street_address', $address);
        $stmt->bindParam(':thana', $thana);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':lat', $latitude);
        $stmt->bindParam(':lng', $longtude);
        $result = $stmt->execute();
        return $result;
    }
}