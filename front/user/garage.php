<?php
session_start();

$garage_id = $_GET['id'];

include_once('../../vendor/autoload.php');

use University\user\garageShow;
$garage = new garageShow();
$garage_info = $garage->garageInfo($garage_id);

use University\user\profile;
$profile = new profile();
$show_profile = $profile->show_profile();

use University\garage\worker;
$worker = new worker();
$show_worker = $worker->show_worker1($garage_id);

include_once ('../view/head.php');

include_once ('../view/header.php');
?>

<div class="row">
        <div class="col-lg-5">
            <div class="card" style="margin-left: 20px">
                <div class="card-header" style="font-size: 18px;font-weight: bold">
                    '<?= $garage_info['garage_name'];?>' Information
                </div>
                <div class="card-body" style="margin-left: 50px;margin-right: 50px;font-weight: bold">
                    <div class="form-group">
                        <label for="exampleInputName">Garage Owner Name</label>
                        <input type="text" value="<?= $garage_info['first_name']; ?> <?= $garage_info['last_name']; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" value="<?= $garage_info['email']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="<?= $garage_info['street_address']; ?>" readonly>
                    </div>
                    <div>
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" value="0<?= $garage_info['phone']; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
<div class="col-lg-7">
    <div class="card" style="margin-right: 20px;margin-bottom: 60px">
        <div class="card-header" style="font-size: 18px;font-weight: bold">
            '<?= $garage_info['garage_name'];?>' Form
        </div>
        <div class="card-body" style="margin-bottom: 20px">
            <form style="margin-left: 150px;margin-right: 150px;font-weight: bold" action="../../elements/user/service_data.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="" name="fullName" value="<?= $show_profile['first_name']; ?> <?= $show_profile['last_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputtel">Mobile</label>
                    <input type="tel" class="form-control" id="exampleInputtel" aria-describedby="mobileHelp" placeholder="" name="mobile" value="0<?= $show_profile['phone']; ?>">
                </div>
                <div class="form-group">
                    <label for="sel1">Worker</label>
                    <select class="form-control" id="sel1" name="worker_name">
                        <option selected>-----Select Worker-----</option>
                        <?php
                        foreach ($show_worker as $worker_one) {
                            ?>
                            <option value="<?= $worker_one['worker_name']; ?>"><?= $worker_one['worker_name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?= $garage_id; ?>" name="garage_id">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?= $show_profile['id']; ?>" name="user_id">
                </div>
                <div class="form-group">
                    <label for="exampleInputService">Service</label>
                    <input type="text" class="form-control" id="exampleInpuService" aria-describedby="serviceHelp" placeholder="Enter Service Name" name="service_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cost</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount" name="price">
                </div>
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include_once ('../view/footer.php');
