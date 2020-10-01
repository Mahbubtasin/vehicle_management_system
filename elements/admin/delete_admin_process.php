<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_admin;
$admin = new all_admin();
$data = $_GET['id'];
$delete_admin = $admin->deleteAdmin($data);

header('Location: ../../front/admin/pages/view_admin.php');