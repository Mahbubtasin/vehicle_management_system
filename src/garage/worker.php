<?php


namespace University\garage;

use University\db;
class worker
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function add_worker($data)
    {
        $worker_name = $_POST['workerName'];
        $worker_number = $_POST['workerNumber'];
        $created_at = date('Y-m-d h:i:s', time());

        $garage = "SELECT * FROM `mechanic_shop` WHERE `garage_id` = '".$_SESSION['garage_id']."'";
        $stmt = $this->conn->prepare($garage);
        $res = $stmt->execute();
        $garageShop = $stmt->fetchAll();
        foreach ($garageShop as $garageOwner)
        {
            $garage_id = $garageOwner['garage_id'];
        }

        $add_worker = "INSERT INTO `worker` (`worker_name`,`worker_number`,`created_at`,`garage_id`) VALUES ('$worker_name','$worker_number','$created_at','$garage_id')";

        $stmt = $this->conn->prepare($add_worker);
        $stmt->bindParam(':worker_name',$worker_name);
        $stmt->bindParam(':worker_number',$worker_number);
        $stmt->bindParam(':created_at',$created_at);
        $stmt->bindParam(':garage_id',$garage_id);
        $result = $stmt->execute();
        return $result;
    }

    public function show_worker()
    {
        $worker = "SELECT * FROM `worker` WHERE `garage_id` = '".$_SESSION['garage_id']."'";
        $stmt = $this->conn->prepare($worker);
        $res = $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    public function show_worker1($garage_id)
    {
        $worker = "SELECT * FROM `worker` WHERE `garage_id` = '$garage_id'";
        $stmt = $this->conn->prepare($worker);
        $res = $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    public function delete_worker($data)
    {
        $delete = "DELETE FROM `worker` WHERE `worker_id` = '$data'";
        $stmt = $this->conn->prepare($delete);
        $result = $stmt->execute();
        return $result;
    }

    public function show_single_worker($id)
    {
        $show = "SELECT * FROM `worker` WHERE `worker_id` = '$id'";
        $stmt = $this->conn->prepare($show);
        $res = $stmt->execute();
        $res = $stmt->fetch();
        return $res;
    }

    public function update_worker($data)
    {
        $worker_id = $_POST['worker_id'];
        $worker_name = $_POST['workerName'];
        $worker_number = $_POST['workerNumber'];
        $modified_at = date('Y-m-d h:i:s',time());

        $updateWorker = "UPDATE `worker` SET `worker_name` = '$worker_name',`worker_number` = '$worker_number',`modified_at` = '$modified_at' WHERE `worker`.`worker_id` = '$worker_id'";

        $stmt = $this->conn->prepare($updateWorker);
        $stmt->bindParam(':worker_name',$worker_name);
        $stmt->bindParam(':worker_number',$worker_number);
        $stmt->bindParam(':modified_at',$modified_at);
        $result = $stmt->execute();
        return $result;
    }
}