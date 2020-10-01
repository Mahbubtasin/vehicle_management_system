<?php
session_start();
$id = $_GET['id'];
include_once('../../../vendor/autoload.php');

include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\all_user;
$userShow = new all_user();
$show_user = $userShow->singleUser($id);
?>
    <section class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User</h4>
                    </div>
                    <div class="card-body">
                        <form action="../../../elements/admin/update_user_process.php" method="post" enctype="multipart/form-data">
                            <div class="add_user" style="margin-left: 220px">
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">First Name</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?= $show_user['id']; ?>">
                                            <input type="text" class="form-control" name="first_name" value="<?= $show_user['first_name']; ?>" style="width: 300px;">
                                            <input type="hidden" name="usertype" value="user">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Last Name</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" value="<?= $show_user['last_name']; ?>" style="width: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="<?= $show_user['email']; ?>" style="width: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input type="" class="form-control" name="password" value="<?= $show_user['password']; ?>" style="width: 300px;">
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
                                            <input type="tel" class="form-control" name="phone" value="<?= $show_user['phone']; ?>" style="width: 300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit_btn" class="btn btn-outline-secondary" style="margin-left: 330px;padding-left: 30px;padding-right: 30px;margin-top: 50px">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('../views/script.php');