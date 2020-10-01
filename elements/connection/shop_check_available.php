<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=vehicle_service", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

if (!empty($_POST["email"]))
{
    $email = $_POST["email"];
    if (filter_var($email,FILTER_VALIDATE_EMAIL) == false)
    {
        echo "error: you did not enter the email";
    }
    else
    {
        $sql = "SELECT email FROM `shop_owner` WHERE email = '$email'";
        $query = $conn->prepare($sql);
        $query->bindParam(':email',$email);
        $query->execute();
        $result = $query->fetchAll();
        $cnt = 1;
        if ($query->rowCount() > 0)
        {
            echo "email already exists...";
            echo "<script>$('#reg_btn').prop('disabled',true);</script>";
        }
        else
        {
            echo "email available...";
            echo "<script>$('#reg_btn').prop('disabled',false);</script>";
        }
    }
}