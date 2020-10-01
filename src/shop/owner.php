<?php


namespace University\shop;


use University\db;

class owner
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function shopOwner()
    {
//        $owner = "SELECT * FROM `shop_owner`";
//        $stmt = $this->conn->prepare($owner);
//        $result = $stmt->execute();
//        $result = $stmt->fetch();
//        return $result;
    }
}