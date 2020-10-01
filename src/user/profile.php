<?php


namespace University\user;

use University\db;

class profile
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function show_profile()
    {
        $query = "SELECT * FROM `user_reg` WHERE `username` = '" . $_SESSION['username'] . "'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function profile_update()
    {

        $approot = $_SERVER['DOCUMENT_ROOT'] . '/vehicle_breakdown_service/';
        $webroot = "http://localhost/";

        if ($_FILES['picture']['name'] != "") {
            $file_name = "Profile_Pic_" . time() . "_" . $_FILES['picture']['name'];


            $target = $_FILES['picture']['tmp_name'];

            $destination = $approot . 'resources/user_profile_pic/' . $file_name;

            $is_file_moved = move_uploaded_file($target, $destination);

            if ($is_file_moved) {
                $_picture = $file_name;
            } else {
                $_picture = null;
            }
        } else {
            $_picture = $_POST['old_image'];
        }

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $password_1 = $_POST['repeat_password'];
        $mobile = $_POST['phone'];

        $update = "UPDATE `user_reg` SET `first_name` = '$first_name',`last_name` = '$last_name',`password` = '$password',`repeat_password` = '$password_1',`phone` = '$mobile',`picture` = '$_picture' WHERE `username` = '" . $_SESSION['username'] . "'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':repeat_password', $password_1);
        $stmt->bindParam(':phone', $mobile);
        $stmt->bindParam(':picture', $_picture);
        $result = $stmt->execute();

        return $result;
    }
}