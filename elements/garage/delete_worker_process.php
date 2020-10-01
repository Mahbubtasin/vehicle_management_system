<?php
session_start();

include_once('../../vendor/autoload.php');
use University\garage\worker;

$del = new worker();
$data = $_GET['id'];
$delete = $del->delete_worker($data);

header('location:../../front/garage/view_worker.php');