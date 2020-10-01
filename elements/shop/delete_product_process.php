<?php
session_start();

include_once('../../vendor/autoload.php');
use University\shop\product;

$del = new product();
$data = $_GET['id'];
$delete = $del->delete_product($data);

header('location:../../front/shop/view_product.php');