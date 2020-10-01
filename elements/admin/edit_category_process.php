<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\category;
$update = new category();
$data = $_POST;
$categoryUpdate = $update->updateCategory($data);

header('Location: ../../front/admin/pages/add_category.php');
