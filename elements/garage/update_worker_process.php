<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\garage\worker;

$updateWorker = new worker();
$data = $_POST;
$workerUpdate = $updateWorker->update_worker($data);

header('location:../../front/garage/view_worker.php');