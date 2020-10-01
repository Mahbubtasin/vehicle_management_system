<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\admin\all_garage;
$data = $_GET['id'];
$deleteGarage = new all_garage();
$delete_all_garage = $deleteGarage->delete_garage($data);

header('Location: ../../front/admin/pages/view_garage.php');