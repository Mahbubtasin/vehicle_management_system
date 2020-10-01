<?php


namespace University\admin;

use University\db;
class category
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connection();
    }
    public function showCategory()
    {
        $query = "SELECT * FROM `category`";
        $stmt = $this->conn->prepare($query);
        $res = $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    public function show_single_Category($category_id)
    {
        $query = "SELECT * FROM `category` WHERE `category_id` = '$category_id'";
        $stmt = $this->conn->prepare($query);
        $res = $stmt->execute();
        $res = $stmt->fetch();
        return $res;
    }

    public function addCategory()
    {
        $category_name = $_POST['category_name'];

        $categoryAdd = "INSERT INTO `category` (`category_name`) VALUES ('$category_name')";
        $stmt = $this->conn->prepare($categoryAdd);
        $stmt->bindParam(':category_name',$category_name);
        $result = $stmt->execute();
        return $result;
    }

    public function delete_category($id)
    {
        $CategoryDelete = "DELETE FROM `category` WHERE `category_id` = '$id'";
        $stmt = $this->conn->prepare($CategoryDelete);
        $result = $stmt->execute();
        return $result;
    }

    public function updateCategory($data)
    {
        $id = $_POST['category_id'];
        $categoryName = $_POST['category_name'];

        $update = "UPDATE `category` SET `category_name` = '$categoryName' WHERE `category_id` = '$id'";

        $stmt = $this->conn->prepare($update);
        $stmt->bindParam(':category_name',$categoryName);
        $res = $stmt->execute();
        return $res;
    }
}