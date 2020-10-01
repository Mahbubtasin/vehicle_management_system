<?php
session_start();

$id = $_GET['id'];

include_once ('../../vendor/autoload.php');
use University\garage\worker;
$worker = new worker();
$workers = $worker->show_single_worker($id);

include_once ('view/head.php');
?>

<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Garage</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="view_worker.php">Worker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="">service</a>
                </li>
                <!--          <li class="nav-item">-->
                <!--            <a class="nav-link js-scroll-trigger" href="#about">About</a>-->
                <!--          </li>-->
                <!--          <li class="nav-item">-->
                <!--            <a class="nav-link js-scroll-trigger" href="#team">Team</a>-->
                <!--          </li>-->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['garage_id']))
                    {
                    ?>
                    <a class="nav-link js-scroll-trigger" href="../../elements/connection/logout/logout.php">Logout</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<form method="post" enctype="multipart/form-data" action="../../elements/garage/update_worker_process.php">
    <div class="card" style="margin-left: 300px;margin-right: 300px">
        <div class="card-header" style="font-weight: bolder;font-size: 20px">
            Update Worker
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="exampleInputWorkerName" style="font-weight: bolder;font-size: 15px;margin-left: 15px">Worker Name</label>
                <input type="text" class="form-control" id="exampleInputWorkerName" aria-describedby="nameHelp" name="workerName" value="<?= $workers['worker_name']; ?>" style="margin-left: 15px;margin-right: 15px">
                <input type="hidden" name="worker_id" value="<?= $workers['worker_id']; ?>">
                <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="row form-group">
                <label for="exampleInputWorkerNumber" style="font-weight: bolder;font-size: 15px;margin-left: 15px">Mobile Number</label>
                <input type="text" class="form-control" id="exampleInputWorkerNumber" aria-describedby="numberHelp" name="workerNumber" value="<?= $workers['worker_number']; ?>" style="margin-left: 15px;margin-right: 15px">
                <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>  <a href="view_worker.php" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>
