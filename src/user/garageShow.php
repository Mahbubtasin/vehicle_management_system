<?php


namespace University\user;

use University\db;
class garageShow
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function garageInfo($garage_id)
    {
        $info = "SELECT * FROM `mechanic_shop` WHERE `garage_id` = '$garage_id'";
        $stmt = $this->conn->prepare($info);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}