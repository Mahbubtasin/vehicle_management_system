<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_garage;
$update = new all_garage();
$id = $_POST;
$garage = $update->update_garage($id);

header('Location: ../../front/admin/pages/view_garage.php');
