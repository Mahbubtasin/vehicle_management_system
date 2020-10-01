<?php


namespace University\user;

use University\db;
class cart
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function cartShow()
    {
        $query = "SELECT * FROM `cart` WHERE `username` = '".$_SESSION['username']."'";
        $stmt = $this->conn->prepare($query);
        $cartDisplay = $stmt->execute();
        $cartDisplay = $stmt->fetchAll();
        return $cartDisplay;
    }

    public function delete_cart($data)
    {
        $DeleteQuery= "DELETE FROM `cart` WHERE `cart`.`id` = '$data'";
        $stmt = $this->conn->prepare($DeleteQuery);
        $result = $stmt->execute();
        return $result;
    }
}