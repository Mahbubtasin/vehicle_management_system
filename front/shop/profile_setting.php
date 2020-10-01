<?php
session_start();

include_once('../../vendor/autoload.php');

use University\shop\profile;

$profiles = new profile();
$singleProfile = $profiles->showProfile();

include_once('../view/head.php');

include_once('../view/header.php');
?>
<div class="container">
    <div class="row my-2">
        <div class="col-lg">
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
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="first-name">First Name</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="first-name" value="<?= $singleProfile['first_name']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="last-name">Last Name</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="last-name" value="<?= $singleProfile['last_name']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="email">Email</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" value="<?= $singleProfile['email']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="password">Password</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="password" value="<?= $singleProfile['password']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="shop-name">Shop Name</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="shop-name" value="<?= $singleProfile['shop_name']; ?>" style="text-transform: capitalize" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="street-address">Street Address</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="street-address" value="<?= $singleProfile['street_address']; ?>" style="text-transform: capitalize" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="thana">Thana</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="thana" value="<?= $singleProfile['thana']; ?>" style="text-transform: capitalize" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label" for="state">State</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="state" value="<?= $singleProfile['state']; ?>" style="text-transform: capitalize" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="update">
                    <form role="form" method="post" action="../../elements/shop/profile.php" enctype="multipart/form-data">
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="first-name">First Name</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="first-name" name="first_name" value="<?= $singleProfile['first_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="last-name">Last Name</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="last-name" name="last_name" value="<?= $singleProfile['last_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="email">Email</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $singleProfile['email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="password">Password</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="password" name="password" value="<?= $singleProfile['password']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="password">Password</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="password" name="repeat_password" value="<?= $singleProfile['password']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="shop-name">Shop Name</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="shop-name" name="shop_name" value="<?= $singleProfile['shop_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="street-address">Street Address</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="street-address" name="street_address" value="<?= $singleProfile['street_address']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="thana">Thana</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="thana" name="thana" value="<?= $singleProfile['thana']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="state">State</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="state" name="state" value="<?= $singleProfile['state']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-lg-3 col-form-label form-control-label" for="phone">Phone</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" name="phone" value="<?= $singleProfile['phone']; ?>">
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
        <!--        <div class="col-lg-4 order-lg-1 text-center">-->
        <!--            <img src="../../resources/user_profile_pic/-->
        <? //= $singleUser['picture'] ?><!--" style="width: 200px;height: 170px;border-radius: 15%" class="mx-auto img-fluid img-circle d-block" alt="avatar">-->
        <!--        </div>-->
    </div>
</div>
<?php
include_once('../view/footer.php');

include_once('../view/script.php');
?>
