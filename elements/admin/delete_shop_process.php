<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_shop_owner;
$data = $_GET['id'];
$deleteShop = new all_shop_owner();
$delete_shop_owner = $deleteShop->delete_shop_owner($data);

header('Location: ../../front/admin/pages/view_store.php');