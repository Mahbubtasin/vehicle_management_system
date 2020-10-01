<?php


namespace University\garage;

use University\db;

class garage_info
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function show_name()
    {
        $show = "SELECT * FROM `mechanic_shop` WHERE `garage_id` = '" . $_SESSION['garage_id'] . "'";
        $stmt = $this->conn->prepare($show);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function show_garage()
    {
        $show = "SELECT * FROM `mechanic_shop` WHERE `type` = 'garage'";
        $stmt = $this->conn->prepare($show);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}