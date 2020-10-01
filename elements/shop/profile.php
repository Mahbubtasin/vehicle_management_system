<?php
session_start();

include_once('../../vendor/autoload.php');
use University\shop\profile;

$profile = new profile();
$updateprofile = $profile->profileUpdate();

if ($updateprofile)
{
    header('location:../../front/shop/profile_setting.php');
}
else
{
    echo "Profile Update Fail.........";
}