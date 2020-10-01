<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\garage\worker;
$worker = new worker();
$data = $_POST;
$add_workerName = $worker->add_worker($data);

if ($add_workerName)
{
    header('Location:../../front/garage/view_worker.php');
}
else
{
    echo "added fail...";
}