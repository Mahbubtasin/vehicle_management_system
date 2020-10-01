<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_admin;
$update = new all_admin();
$data = $_POST;
$adminUpdate = $update->updateAdmin();

header('Location: ../../front/admin/pages/view_admin.php');