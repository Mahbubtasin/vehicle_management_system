<?php


namespace University\admin;

use University\db;
class all_admin
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function show_admin()
    {
        $query = "SELECT * FROM `admin`";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function show_single_admin()
    {
        $query = "SELECT * FROM `admin` WHERE `id` = '".$_SESSION['id']."'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function addAdmin($data)
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['password'];
        $usertype = $_POST['usertype'];
        $mbl = $_POST['phone'];

        $admin = "INSERT INTO `admin` (`first_name`, `last_name`, `email`, `password`, `repeat_password`,`phone`) VALUES ('$first_name','$last_name','$email','$password_1','$password_2','$mbl')";

        $stmt = $this->conn->prepare($admin);
        $stmt->bindParam(':first_name',$first_name);
        $stmt->bindParam(':last_name',$last_name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password_1);
        $stmt->bindParam(':repeat_password',$password_2);
//        $stmt->bindParam(':usertype',$usertype);
        $stmt->bindParam(':phone',$mbl);
        $result = $stmt->execute();
        return $result;
    }

    public function deleteAdmin($data)
    {
        $delete = "DELETE FROM `admin` WHERE `id` = '$data'";
        $stmt = $this->conn->prepare($delete);
        $result = $stmt->execute();
        return $result;
    }

    public function singleAdmin($id)
    {
        $admin = "SELECT * FROM `admin` WHERE `id` = '$id'";
        $stmt = $this->conn->prepare($admin);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function updateAdmin()
    {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['password'];
//        $usertype = $_POST['usertype'];
        $mbl = $_POST['phone'];

        $update = "UPDATE `admin` SET `first_name` = '$first_name',`last_name` = '$last_name',`email` = '$email',`password` = '$password_1',`repeat_password` = '$password_2',`phone` = '$mbl' WHERE `id` = '$id'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first_name',$first_name);
        $stmt->bindParam(':last_name',$last_name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password_1);
        $stmt->bindParam(':repeat_password',$password_2);
//        $stmt->bindParam(':usertype',$usertype);
        $stmt->bindParam(':phone',$mbl);
        $result = $stmt->execute();
        return $result;
    }
}