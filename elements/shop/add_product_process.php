<?php
session_start();

include_once('../../vendor/autoload.php');
use University\shop\product;

$insert = new product();
$data = $_POST;
$product = $insert->add_product($data);

if ($product)
{
    header('location:../../front/shop/view_product.php');
}
else
{
    echo "fail";
}
