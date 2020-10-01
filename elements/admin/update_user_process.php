<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_user;
$update = new all_user();
$id = $_POST;
$update_user = $update->updateUser($id);

header('Location: ../../front/admin/pages/view_user.php');