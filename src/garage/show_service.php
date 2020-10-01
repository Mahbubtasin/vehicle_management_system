<?php


namespace University\garage;

use University\db;
class show_service
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function showService()
    {
        $service = "SELECT * FROM `services` WHERE `garage_id` = '".$_SESSION['garage_id']."'";
        $stmt = $this->conn->prepare($service);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function delete_service($data)
    {
        $delete = "DELETE FROM `services` WHERE `id` = '$data'";
        $stmt = $this->conn->prepare($delete);
        $result = $stmt->execute();
        return $result;
    }
}