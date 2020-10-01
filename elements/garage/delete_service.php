<?php
session_start();

include_once('../../vendor/autoload.php');
use University\garage\show_service;

$del = new show_service();
$data = $_GET['id'];
$delete = $del->delete_service($data);

header('location:../../front/garage/all_service.php');