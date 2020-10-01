<?php
session_start();

include_once('../../vendor/autoload.php');
use University\user\cart;

$del = new cart();
$data = $_GET['id'];
$delete = $del->delete_cart($data);

header('Location:../../front/user/cart.php');