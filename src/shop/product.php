<?php


namespace University\shop;

use University\db;

class product
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

    public function add_product($data)
    {
        $product_name = $_POST['productName'];
//        $category = $_POST['category'];
        $category_name = $_POST['category_name'];
        $title = $_POST['title'];
        $description = $_POST['description'];
//        $bookPhoto = $_FILES['picture']['name'];
//        $photo = $_POST['picture'];
        $price = $_POST['price'];
        $photo = $_POST['picture'];
        $created_at = date('Y-m-d h:i:s', time());
//        echo $bookPhoto;

        $query = "SELECT * FROM `category` WHERE `category_name`= '$category_name'";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $categories = $stmt->fetchAll();
        foreach ($categories as $categoriesOne) {
            $category_ID = $categoriesOne['category_id'];
        }

        $shopOwner = "SELECT * FROM `shop_owner` WHERE `shop_owner_id` = '" . $_SESSION['shop_owner_id'] . "'";

        $stmt = $this->conn->prepare($shopOwner);
        $result = $stmt->execute();
        $owner = $stmt->fetchAll();
        foreach ($owner as $shop_owner) {
            $owner_id = $shop_owner['shop_owner_id'];
        }


        $approot = $_SERVER['DOCUMENT_ROOT'] . '/vehicle_breakdown_service/';


        $file_name = "Product_" . time() . "_" . $_FILES['picture']['name'];


        $target = $_FILES['picture']['tmp_name'];

        $destination = $approot . 'resources/product_photo/' . $file_name;

        $is_file_moved = move_uploaded_file($target, $destination);

        if ($is_file_moved) {
            $photo = $file_name;

            $addProduct = "INSERT INTO `product` (`product_name`,`category_name`,`category_id`,`title`,`description`,`picture`,`price`,`created_at`,`shop_owner_id`) VALUES ('$product_name','$category_name','$category_ID','$title','$description','$photo','$price','$created_at','$owner_id')";

            $stmt = $this->conn->prepare($addProduct);
            $stmt->bindParam(':product_name', $product_name);
            $stmt->bindParam(':category_name', $category_name);
            $stmt->bindParam(':category_id', $category_ID);
            $stmt->bindParam(':shop_owner_id', $owner_id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':picture', $photo);
            $result = $stmt->execute();
            return $result;
        } else {
            $photo = null;
        }
    }

    public function show_product()
    {
        $query = "SELECT * FROM `product` WHERE `shop_owner_id` = '" . $_SESSION['shop_owner_id'] . "'";
        $stmt = $this->conn->prepare($query);
        $res = $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    public function delete_product($data)
    {
        $del = "DELETE FROM `product` WHERE `product_id` = '$data'";
        $stmt = $this->conn->prepare($del);
        $result = $stmt->execute();
        return $result;
    }

    public function show_single_product($product_id)
    {
        $query = "SELECT * FROM `product` WHERE `product_id` = '$product_id'";
        $stmt = $this->conn->prepare($query);
        $res = $stmt->execute();
        $res = $stmt->fetch();
        return $res;
    }

    public function update_product($data)
    {
        $id = $_POST['product_id'];
        $product_name = $_POST['productName'];
//        $category = $_POST['category'];
        $category_name = $_POST['category_name'];
        $title = $_POST['title'];
        $description = $_POST['description'];
//        $bookPhoto = $_FILES['picture']['name'];
//        $photo = $_POST['picture'];
        $price = $_POST['price'];
        $photo = $_POST['picture'];
        $modified_at = date('Y-m-d h:i:s', time());

        $query = "SELECT * FROM `category` WHERE `category_name`= '$category_name'";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $categories = $stmt->fetchAll();
        foreach ($categories as $categoriesOne) {
            $category_ID = $categoriesOne['category_id'];
        }

        $approot = $_SERVER['DOCUMENT_ROOT'] . '/vehicle_breakdown_service/';

        $file_name = "Product_" . time() . "_" . $_FILES['picture']['name'];


        $target = $_FILES['picture']['tmp_name'];

        $destination = $approot . 'resources/product_photo/' . $file_name;

        $is_file_moved = move_uploaded_file($target, $destination);
        if ($is_file_moved) {
            $photo = $file_name;

            $update = "UPDATE `product` SET `product_name` = '$product_name', `category_name` = '$category_name', `category_id` = '$category_ID', `title` = '$title', `description` = '$description', `picture` = '$photo', `price` = '$price', `modified_at` = '$modified_at' WHERE `product`.`product_id` = '$id'";

            $stmt = $this->conn->prepare($update);
            $stmt->bindParam(':product_name', $product_name);
            $stmt->bindParam(':category_name', $category_name);
            $stmt->bindParam(':category_id', $category_ID);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':modified_at', $modified_at);
            $stmt->bindParam(':picture', $photo);
            $result = $stmt->execute();
            return $result;
        } else {
            $photo = $_POST['old_image'];

            $update = "UPDATE `product` SET `product_name` = '$product_name',`category_name` = '$category_name',`category_id` = '$category_ID',`title` = '$title',`description` = '$description',`picture` = '$photo',`price` = '$price',`modified_at` = '$modified_at' WHERE `product`.`product_id` = '$id'";

            $stmt = $this->conn->prepare($update);
            $stmt->bindParam(':product_name', $product_name);
            $stmt->bindParam(':category_name', $category_name);
            $stmt->bindParam(':category_id', $category_ID);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':modified_at', $modified_at);
            $stmt->bindParam(':picture', $photo);
            $result = $stmt->execute();
            return $result;
        }
    }

    public function product_details()
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM `product` WHERE `product_id` = '$id'";
        $stmt = $this->conn->prepare($query);
        $res = $stmt->execute();
        $res = $stmt->fetch();
        return $res;
    }
}