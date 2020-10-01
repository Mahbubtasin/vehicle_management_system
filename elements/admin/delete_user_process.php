<?php

session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_user;
$del = new all_user();
$data = $_GET['id'];
$user_delete = $del->delete($data);

header('Location: ../../front/admin/pages/view_user.php');