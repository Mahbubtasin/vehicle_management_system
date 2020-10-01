<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new PDO("mysql:host=localhost;dbname=vehicle_service", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";

$type = $_POST['type'];

if ($type == 0) {
    $query = "SELECT * FROM `user_reg` WHERE `email` = :email and `password` = :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $result = $stmt->execute();

    $user = $stmt->fetch();


    $_SESSION['username'] = $user['username'];

    if ($user['email'] == $email && $user['password'] == $password && $user['usertype'] == 'user') {
        $_SESSION['username'];
        header('location:../../front/user/user_index.php');
    } else {
//        echo "<script>alert('Login Name or Password is invalid!!!');</script>";
        $_SESSION['user_login_error'] = "Login Name or Password is invalid!!!";
        header('location:../../front/user/login.php');
    }
} elseif ($type == 1) {
    $query = "SELECT * FROM `shop_owner` WHERE `email` = :email and `password` = :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $result = $stmt->execute();

    $shop_owner = $stmt->fetch();

    $_SESSION['shop_owner_id'] = $shop_owner['shop_owner_id'];

    if ($shop_owner['email'] == $email && $shop_owner['password'] == $password && $shop_owner['usertype'] == 'shop_owner') {
        $_SESSION['shop_owner_id'];
        header('location:../../front/shop/index.php');
    } else {
//        echo "<script>alert('Login Name or Password is invalid!!!');</script>";
        $_SESSION['shop_login_error'] = "Login Name or Password is invalid!!!";
        header('location:../../front/user/login.php');
    }
} elseif ($type == 2) {
    $query = "SELECT * FROM `admin` WHERE `email` = :email and `password` = :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $result = $stmt->execute();

    $user = $stmt->fetch();

    $_SESSION['id'] = $user['id'];
    if ($user['email'] == $email && $user['password'] == $password) {
        $_SESSION['id'];
        header('location:../../front/admin/index.php');
    } else {
        // echo "<script>alert('Login Name or Password is invalid!!!');</script>";
        $_SESSION['admin_login_error'] = "Login Name or Password is invalid!!!";
        header('location:../../front/user/login.php');
    }
} elseif ($type == 3) {
    $query = "SELECT * FROM `mechanic_shop` WHERE `email` = :email and `password` = :password";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $result = $stmt->execute();

    $garage = $stmt->fetch();

    $_SESSION['garage_id'] = $garage['garage_id'];
    if ($garage['email'] == $email && $garage['password'] == $password && $garage['usertype'] == 'garage_owner') {
        $_SESSION['garage_id'];
        header('location:../../front/garage/index.php');
    } else {
        // echo "<script>alert('Login Name or Password is invalid!!!');</script>";
        $_SESSION['garage_login_error'] = "Login Name or Password is invalid!!!";
        header('location:../../front/user/login.php');
    }
} else {
    echo "<script>alert('You do not have any account...')</script>";
}

