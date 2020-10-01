

<?php
session_start();
include_once('../../vendor/autoload.php');
use University\user\profile;

$user = new profile();
$singleUser = $user->show_profile();

include_once('../view/head.php'); ?>

<?php include_once('../view/header.php'); ?>

<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#update" data-toggle="tab" class="nav-link">Update</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
<!--                    <h5 class="mb-3">User Profile</h5>-->
                    <div class="row">
                        <div class="col-md-6">
                            <h6>About</h6>
                            <p>
                                My Name is <span style="font-style: italic;font-weight: bold"><?= $singleUser['first_name']; ?> <?= $singleUser['last_name']; ?></span>
                            </p>
                            <p>
                                Web Designer, Computer Science & Engineer.
                            </p>
                            <p>
                                I am student of Port City International University.
                            </p>
                            <p>
                                Email address is <span style="font-weight: bold;font-style: italic"><?= $singleUser['email'] ?></span>
                            </p>
                            <p>
                                My Project name is Vehicle Service.
                            </p>
                            <p>
                                It's find nearby garage location when my vehicle is breakdown.
                            </p>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="update">
                    <form role="form" method="post" action="../../elements/user/profile_update.php" enctype="multipart/form-data">
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="first_name" value="<?= $singleUser['first_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                <input class="form-control" type="text" name="last_name" value="<?= $singleUser['last_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                <input class="form-control" type="" name="password" value="<?= $singleUser['password']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                <input class="form-control" type="" name="repeat_password" value="<?= $singleUser['repeat_password']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                <input class="form-control" type="tel" name="phone" value="<?= $singleUser['phone']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label">Picture</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <!--                                                        <label for="input-img">Picture</label>-->
                                    <input type="file" class="form-control-file" id="input-img" name="picture" value=""  placeholder="">
                                    <input type="hidden" name="old_image" value="<?= $singleUser['picture']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="../../resources/user_profile_pic/<?= $singleUser['picture'] ?>" style="width: 240px;height: 300px;border-radius: 15%" class="mx-auto img-fluid img-circle d-block" alt="avatar">
        </div>
    </div>
</div>

<?php include_once('../view/footer.php'); ?>
<?php include_once('../view/script.php'); ?>
