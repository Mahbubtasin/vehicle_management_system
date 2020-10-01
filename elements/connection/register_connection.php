<?php
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=vehicle_service", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if (isset($_POST['register'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $user_type = $_POST['usertype'];
    $password = $_POST['password_1'];
    $re_password = $_POST['password_2'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $photo = $_POST['picture'];
    $created_at = date('Y-m-d h:i:s', time());


    $approot = $_SERVER['DOCUMENT_ROOT'] . '/vehicle_breakdown_service/';


    $file_name = "Profile_Pic_" . time() . "_" . $_FILES['picture']['name'];


    $target = $_FILES['picture']['tmp_name'];

    $destination = $approot . 'resources/user_profile_pic/' . $file_name;

    $is_file_moved = move_uploaded_file($target, $destination);

    if ($is_file_moved) {
        $photo = $file_name;
    } else {
        $photo = null;
    }

    if ($password == $re_password) {

        $query = "INSERT INTO `user_reg` (`first_name`,`last_name`,`email`,`usertype`,`password`,`repeat_password`,`phone`,`created_at`,`username`,`gender`,`picture`)
                    VALUES ('$first_name','$last_name','$email','$user_type','$password','$re_password','$phone','$created_at','$username','$gender','$photo')";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':usertype', $user_type);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':repeat_password', $re_password);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':picture', $photo);
        $stmt->bindParam(':created_at', $created_at);

        $result = $stmt->execute();
    } else {
//        echo "<script>alert('Password do not match. Try again...');</script>";
//
        $_SESSION['error_message'] = "Password do not match. Try again...";
        header('location:../../front/user/register.php');
    }

    $lastInsertId = $conn->lastInsertId();
    if ($lastInsertId) {
//        echo "<script>alert('Registration successfull. Now you can login');</script>";
        $_SESSION['register_messages'] = "Registration successful. Now you can login";
        header('location:../../front/user/login.php');
    }
}
