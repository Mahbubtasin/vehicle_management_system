<?php
session_start();
//$first_name = $_POST['firstname'];
//$last_name = $_POST['lastname'];
//$email = $_POST['email'];
//$username = $_POST['username'];
//$password = $_POST['password_1'];
//$re_password = $_POST['password_2'];
//$phone = $_POST['phone'];
//$gender = $_POST['gender'];
//$created_at = date('Y-m-d h:i:s',time());


//$email = test_input($_POST['email']);
//if (!filter_var($email,FILTER_VALIDATE_EMAIL))
//{
//    echo "Invalid Email";
//}

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
    $shop_name = $_POST['shopname'];
    $user_type = $_POST['usertype'];
    $password = $_POST['password_1'];
    $re_password = $_POST['password_2'];
    $phone = $_POST['phone'];
    $street_address = $_POST['streetaddress'];
//    $photo = $_POST['picture'];
    $thana = $_POST['thana'];
    $state = $_POST['state'];

    $created_at = date('Y-m-d h:i:s', time());

//    $approot = $_SERVER['DOCUMENT_ROOT'].'/4rd-final_project - Copy/';
//
//
//    $file_name = "Profile_Pic_".time()."_".$_FILES['picture']['name'];
//
//
//    $target=$_FILES['picture']['tmp_name'];
//
//    $destination=$approot.'resources/user_profile_pic/'.$file_name ;
//
//    $is_file_moved =move_uploaded_file($target,$destination);
//
//    if($is_file_moved)
//    {
//        $photo = $file_name;
//    }
//    else
//    {
//        $photo = null;
//    }

    if ($password == $re_password) {

        $query = "INSERT INTO `shop_owner` (`first_name`,`last_name`,`email`,`usertype`,`password`,`repeat_password`,`phone`,`created_at`,`shop_name`,`street_address`,`thana`,`state`)
                    VALUES ('$first_name','$last_name','$email','$user_type','$password','$re_password','$phone','$created_at','$shop_name','$street_address','$thana','$state')";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':usertype', $user_type);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':repeat_password', $re_password);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':shop_name', $shop_name);
        $stmt->bindParam(':street_address', $street_address);
        $stmt->bindParam(':thana', $thana);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':created_at', $created_at);

        $result = $stmt->execute();
    } else {
//        echo "<script>alert('Password do not match. Try again...');</script>";
//
        $_SESSION['error_message'] = "Password do not match. Try again...";
        header('location:../../front/shop/shop_register.php');
    }

    $lastInsertId = $conn->lastInsertId();
    if ($lastInsertId) {
//        echo "<script>alert('Registration successfull. Now you can login');</script>";
        $_SESSION['register_messages'] = "Registration successful. Now you can login";
        header('location:../../front/user/login.php');
    }
//    else {
//        echo "<script>alert('Something went wrong. Please try again');</script>";
//        header('location:../../front/user/register.php');
//    }


}




//$query = "INSERT INTO `user_reg` (`first_name`,`last_name`,`email`,`password`,`repeat_password`,`phone`,`created_at`,`username`,`gender`)
//                    VALUES ('$first_name','$last_name','$email','$password','$re_password','$phone','$created_at','$username','$gender')";
//
//$stmt = $conn->prepare($query);
//
//$stmt->bindParam(':first_name',$first_name);
//$stmt->bindParam(':last_name',$last_name);
//$stmt->bindParam(':email',$email);
//$stmt->bindParam(':password',$password);
//$stmt->bindParam(':repeat_password',$re_password);
//$stmt->bindParam(':phone',$phone);
//$stmt->bindParam(':username',$username);
//$stmt->bindParam(':gender',$gender);
//$stmt->bindParam(':created_at',$created_at);
//
//$result = $stmt->execute();

//header('location:../../login.php');
