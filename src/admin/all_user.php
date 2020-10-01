<?php


namespace University\admin;

use University\db;

class all_user
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function show_user()
    {
        $user = "SELECT * FROM `user_reg` WHERE `usertype` = 'user'";
        $stmt = $this->conn->prepare($user);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function delete($data)
    {
        $delete = "DELETE FROM `user_reg` WHERE `id` = '$data'";
        $stmt = $this->conn->prepare($delete);
        $res = $stmt->execute();
        return $res;
    }

    public function singleUser($id)
    {
        $user = "SELECT * FROM `user_reg` WHERE `id` = '$id'";
        $stmt = $this->conn->prepare($user);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function updateUser($id)
    {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['password'];
        $usertype = $_POST['usertype'];
        $mbl = $_POST['phone'];

        $update = "UPDATE `user_reg` SET `first_name` = '$first_name',`last_name` = '$last_name',`email` = '$email',`password` = '$password_1',`repeat_password` = '$password_2',`usertype` = '$usertype',`phone` = '$mbl' WHERE `id` = '$id'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_1);
        $stmt->bindParam(':repeat_password', $password_2);
        $stmt->bindParam(':usertype', $usertype);
        $stmt->bindParam(':phone', $mbl);
        $result = $stmt->execute();
        return $result;

    }
}