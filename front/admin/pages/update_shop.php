<?php
session_start();

$shop_owner = $_GET['id'];
include_once('../../../vendor/autoload.php');

include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\all_shop_owner;
$shop = new all_shop_owner();
$single_shop = $shop->single_shop($shop_owner);
?>
    <section class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Shop Owner</h4>
                    </div>
                    <div class="card-body">
                        <form action="../../../elements/admin/update_shop_process.php" method="post" enctype="multipart/form-data">
                            <div class="edit_shop" style="margin-left: 220px;">
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">First Name</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="hidden" name="shop_owner_id" value="<?= $single_shop['shop_owner_id']; ?>">
                                            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="<?= $single_shop['first_name']; ?>" style="width: 300px">
                                            <input type="hidden" name="usertype" value="shop_owner">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Last Name</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="<?= $single_shop['last_name']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?= $single_shop['email']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="" class="form-control" name="password" placeholder="Enter Password" value="<?= $single_shop['password']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <!--                        <div class="form-group">-->
                                <!--                            <input type="" class="form-control" name="repeat_password" placeholder="Enter Password Again">-->
                                <!--                        </div>-->
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Mobile Number</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone" placeholder="Enter Mobile Number" value="<?= $single_shop['phone']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Shop Name</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="shop_name" placeholder="Enter Shop Name" value="<?= $single_shop['shop_name']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Street Address</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="street_address" placeholder="Enter Address" value="<?= $single_shop['street_address']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Thana</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="thana" placeholder="Enter Thana" value="<?= $single_shop['thana']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">State</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="state" placeholder="Enter State" value="<?= $single_shop['state']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Latitude</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="lat" placeholder="Enter Latitude" value="<?= $single_shop['lat']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Longitude</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="lng" placeholder="Enter Longitude" value="<?= $single_shop['lng']; ?>" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit_btn" class="btn btn-outline-warning" style="margin-left: 330px;padding-left: 30px;padding-right: 30px;margin-top: 50px">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('../views/script.php');