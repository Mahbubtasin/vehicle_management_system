<?php


namespace University\user;

use University\db;
class service
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function ServiceData($data)
    {
        $full_name = $_POST['fullName'];
        $mbl = $_POST['mobile'];
        $worker_name = $_POST['worker_name'];
        $service = $_POST['service_name'];
        $cost = $_POST['price'];
        $garageID = $_POST['garage_id'];
        $customer_id = $_POST['user_id'];
        $created_at = date('Y-m-d h:i:s', time());

//        $query = "SELECT * FROM `worker` WHERE `worker_name`= '$worker_name'";
//        $stmt = $this->conn->prepare($query);
//        $result = $stmt->execute();
//        $worker = $stmt->fetchAll();
//        foreach ($worker as $workerOne) {
//            $worker_id = $workerOne['worker_id'];
//        }

//        $customer = "SELECT * FROM `user_reg` WHERE `id` = '".$_SESSION['id']."'";
//        $stmt = $this->conn->prepare($customer);
//        $result = $stmt->execute();
//        $customerOne = $stmt->fetchAll();
//        foreach ($customerOne as $customerTwo)
//        {
//            $customerID = $customerTwo['id'];
//        }

        $service = "INSERT INTO `services` (`full_name`,`phone`,`service_name`,`cost`,`garage_id`,`service_time`,`worker_name`,`user_id`) VALUES ('$full_name','$mbl','$service','$cost','$garageID','$created_at','$worker_name','$customer_id')";

        $stmt = $this->conn->prepare($service);
        $stmt->bindParam(':full_name',$full_name);
        $stmt->bindParam(':phone',$mbl);
        $stmt->bindParam(':worker_name',$worker_name);
        $stmt->bindParam(':service_name',$service);
        $stmt->bindParam(':cost',$cost);
        $stmt->bindParam(':garage_id',$garageID);
        $stmt->bindParam(':user_id',$customer_id);
        $stmt->bindParam(':service_time',$created_at);
        $result = $stmt->execute();
        return $result;
    }

    public function checkoutData($data)
    {
        $name = $_POST['name'];
        $phone = $_POST['number'];
        $state = $_POST['state'];
        $address = $_POST['address'];
        $userID = $_POST['user_id'];
        $payment_method = $_POST['payment'];
        $bkash_number = $_POST['bkashNumber'];
        $trxID = $_POST['trx_id'];
        $created_at = date('Y-m-d h:i:s', time());

        $checkout = "INSERT INTO `checkout` (`name`,`phone`,`state`,`address`,`user_id`,`created_at`,`payment`,`bkashNumber`,`trx_id`) VALUES ('$name','$phone','$state','$address','$userID','$created_at','$payment_method','$bkash_number','$trxID')";

        $stmt = $this->conn->prepare($checkout);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':phone',$phone);
        $stmt->bindParam(':state',$state);
        $stmt->bindParam(':address',$address);
        $stmt->bindParam(':user_id',$userID);
        $stmt->bindParam(':payment',$payment_method);
        $stmt->bindParam(':bkashNumber',$bkash_number);
        $stmt->bindParam(':trx_id',$trxID);
        $stmt->bindParam(':created_at',$created_at);
        $result = $stmt->execute();
        return $result;
    }
}