<?php


namespace University\admin;


use University\db;

class all_garage
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function add_garage()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];
        $mbl = $_POST['phone'];
        $garage_name = $_POST['garage_name'];
        $address = $_POST['street_address'];
        $type = $_POST['type'];
        $title = $_POST['title'];
        $latitude = $_POST['lat'];
        $longtude = $_POST['lng'];

        $garage = "INSERT INTO `mechanic_shop` (`first_name`,`last_name`,`email`,`password`,`usertype`,`phone`,`garage_name`,`street_address`,`type`,`title`,`lat`,`lng`) VALUES ('$first_name','$last_name','$email','$password','$usertype','$mbl','$garage_name','$address','$type','$title','$latitude','$longtude')";

        $stmt = $this->conn->prepare($garage);
        $stmt->bindParam(':first_name',$first_name);
        $stmt->bindParam(':last_name',$last_name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':usertype',$usertype);
        $stmt->bindParam(':phone',$mbl);
        $stmt->bindParam(':garage_name',$garage_name);
        $stmt->bindParam(':street_address',$address);
        $stmt->bindParam(':type',$type);
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':lat',$latitude);
        $stmt->bindParam(':lng',$longtude);
        $result = $stmt->execute();
        return $result;
    }

    public function show_garage()
    {
        $garage = "SELECT * FROM `mechanic_shop`";
        $stmt = $this->conn->prepare($garage);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function delete_garage($data)
    {
        $deleteGarage = "DELETE FROM `mechanic_shop` WHERE `garage_id` = '$data'";
        $stmt = $this->conn->prepare($deleteGarage);
        $result = $stmt->execute();
        return $result;
    }

    public function update_garage($id)
    {
        $id = $_POST['garage_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mbl = $_POST['phone'];
        $garage_name = $_POST['garage_name'];
        $title = $_POST['title'];
        $address = $_POST['street_address'];
        $latitude = $_POST['lat'];
        $longtude = $_POST['lng'];


        $update = "UPDATE `mechanic_shop` SET `first_name` = '$first_name',`last_name` = '$last_name',`email` = '$email',`password` = '$password',`phone` = '$mbl',`garage_name` = '$garage_name',`street_address` = '$address',`title` = '$title',`lat` = '$latitude',`lng` = '$longtude' WHERE `garage_id` = '$id'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first_name',$first_name);
        $stmt->bindParam(':last_name',$last_name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':phone',$mbl);
        $stmt->bindParam(':garage_name',$garage_name);
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':lat',$latitude);
        $stmt->bindParam(':lng',$longtude);
        $stmt->bindParam(':street_address',$address);
        $result = $stmt->execute();
        return $result;
    }

    public function single_garage($garage)
    {
        $singleGarage = "SELECT * FROM `mechanic_shop` WHERE `garage_id` = '$garage'";
        $stmt = $this->conn->prepare($singleGarage);
        $res = $stmt->execute();
        $res = $stmt->fetch();
        return $res;
    }

}