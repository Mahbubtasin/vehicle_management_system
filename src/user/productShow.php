<?php


namespace University\user;

use University\db;

class productShow
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = db::connection();
    }

//    public function shopSidebar()
//    {
//        $query = "SELECT * FROM `category`";
//        $stmt = $this->conn->prepare($query);
//        $result = $stmt->execute();
//        while ($result = $stmt->fetch())
//        {
//            $data[] = $result;
//        }
//        return $data;
//    }

    public function product_show()
    {
        $query = "SELECT * FROM `product`";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $result;
        }
        return $data;
    }

//    public function showProduct($shop_id)
//    {
//        $queryProduct = "SELECT * FROM `product` WHERE `shop_owner_id` = '$shop_id'";
//        $stmt = $this->conn->prepare($queryProduct);
//        $res = $stmt->execute();
//        while ($res = $stmt->fetch())
//        {
//            $data[] = $res;
//        }
//        return $data;
//    }

    public function showProduct1($shop_id)
    {
        $queryProduct = "SELECT * FROM `product` WHERE `shop_owner_id` = '$shop_id'";
        $stmt = $this->conn->prepare($queryProduct);
        $res = $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    public function productDescription($id)
    {
        $description = "SELECT * FROM `product` WHERE `product_id` = '$id'";
        $stmt = $this->conn->prepare($description);
        $result = $stmt->execute();
//        while ($result = $stmt->fetch())
//        {
//            $single_product = $result;
//        }
//        return $single_product;
        $result = $stmt->fetch();
        return $result;
    }
}