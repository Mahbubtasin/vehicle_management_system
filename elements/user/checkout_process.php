<?php
session_start();

include_once('../../vendor/autoload.php');

use University\user\service;
$add = new service();
$data = $_POST;
$checkout = $add->checkoutData($data);

if ($checkout)
{
    header('location:../../front/user/shop_service.php');
}
else
{
    echo "fail";
}
