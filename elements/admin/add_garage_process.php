<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_garage;
$garage = new all_garage();
$data = $_POST;
$add_garage = $garage->add_garage($data);

header('Location: ../../front/admin/pages/view_garage.php');