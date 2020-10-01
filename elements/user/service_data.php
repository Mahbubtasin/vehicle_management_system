<?php
session_start();

include_once('../../vendor/autoload.php');

use University\user\service;
$insert = new service();
$data = $_POST;
$service = $insert->ServiceData($data);

if ($service)
{
    header('location:../../front/user/garage_service.php');
}
else
{
    echo "fail";
}
