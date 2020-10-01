<?php

session_start();

include_once('../../vendor/autoload.php');
use University\shop\product;

$product = new product();
$data = $_POST;
$updateProduct = $product->update_product($data);

header('location:../../front/shop/view_product.php');
