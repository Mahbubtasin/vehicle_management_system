<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_shop_owner;
$update = new all_shop_owner();
$id = $_POST;
$shop = $update->Update_shop($id);

header('Location: ../../front/admin/pages/view_store.php');
