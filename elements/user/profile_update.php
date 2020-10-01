<?php
session_start();

include_once ('../../vendor/autoload.php');
use University\user\profile;

$update = new profile();
$profile = $update->profile_update();

header('location:../../front/user/user_profile.php');