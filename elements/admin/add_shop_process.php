<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_shop_owner;
$addShop = new all_shop_owner();
$data = $_POST;
$add_shop_owner = $addShop->add_shop($data);

header('Location: ../../front/admin/pages/view_store.php');