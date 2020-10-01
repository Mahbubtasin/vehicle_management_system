<?php
session_start();
include_once('../../../vendor/autoload.php');

use University\admin\all_admin;
$username = new all_admin();
$admin = $username->show_admin();
$total_admin = count($admin);

use University\admin\all_user;
$user = new all_user();
$all_user = $user->show_user();
$total_user = count($all_user);

use University\admin\all_shop_owner;
$shop = new all_shop_owner();
$shop_owner = $shop->show_shop();
$total_shop_owner = count($shop_owner);

use University\admin\category;
$category = new category();
$categories = $category->showCategory();
$total_category = count($categories);

use University\admin\all_garage;
$garage = new all_garage();
$allgarage = $garage->show_garage();
$total_garage = count($allgarage);

include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');
?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $total_admin; ?></h3>

                            <p style="font-weight: bold">Admin</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <a href="view_admin.php" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $total_user; ?></h3>

                            <p style="font-weight: bold">User</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-alt"></i>
                        </div>
                        <a href="view_user.php" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $total_shop_owner; ?></h3>

                            <p style="font-weight: bold">Shop Owner</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <a href="view_store.php" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
<!--                ./col-->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $total_garage; ?></h3>

                            <p style="font-weight: bold">Garage</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <a href="view_garage.php" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
<!--                <div class="col-lg-3 col-6">-->
<!--                    // small box -->
<!--                    <div class="small-box bg-danger">-->
<!--                        <div class="inner">-->
<!--                            <h3>--><?//= $total_category; ?><!--</h3>-->
<!---->
<!--                            <p style="font-weight: bold">Category</p>-->
<!--                        </div>-->
<!--                        <div class="icon">-->
<!--                                             //            <i class="ion ion-pie-graph"></i>-->
<!--                        </div>-->
<!--                        <a href="add_category.php" class="small-box-footer">View <i-->
<!--                                    class="fas fa-arrow-circle-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- ./col -->
            </div>
            <!-- /.row -->

<!--            <div class="row">-->
<!--                <div class="col-lg-6">-->
<!--                    <div class="small-box">-->
<!--                    <a href="#" style="padding: 10px 220px">Add Admin</a>-->
<!--                </div>-->
<!--                </div>-->
<!--                <div class="col-lg-6">-->
<!--                    <div class="small-box">-->
<!--                    <a href="#" style="padding: 10px 220px">Add User</a>-->
<!--                </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php
include_once('../views/script.php');