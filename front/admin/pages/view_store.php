<?php
session_start();
include_once('../../../vendor/autoload.php');



include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\all_shop_owner;
$shop = new all_shop_owner();
$show_all_shop_owner = $shop->show_shop();
?>
    <section>
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Shop Owner</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Shop Name</th>
                                        <th>Street Address</th>
                                        <th>Thana</th>
                                        <th>State</th>
                                        <th>Mobile</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Registration Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($show_all_shop_owner as $shop_owner) {
                                        ?>
                                        <tr>
                                            <th><?= $shop_owner['shop_owner_id']; ?></th>
                                            <td><?= $shop_owner['first_name']; ?></td>
                                            <td><?= $shop_owner['last_name']; ?></td>
                                            <td><?= $shop_owner['email']; ?></td>
                                            <td><?= $shop_owner['password']; ?></td>
                                            <td><?= $shop_owner['shop_name']; ?></td>
                                            <td><?= $shop_owner['street_address']; ?></td>
                                            <td><?= $shop_owner['thana']; ?></td>
                                            <td><?= $shop_owner['state']; ?></td>
                                            <td><?= $shop_owner['phone']; ?></td>
                                            <td><?= $shop_owner['lat']; ?></td>
                                            <td><?= $shop_owner['lng']; ?></td>
                                            <td><?= $shop_owner['created_at']; ?></td>
                                            <td style="text-align: center">
                                                <a class="btn btn-outline-warning" href="update_shop.php?id=<?= $shop_owner['shop_owner_id']; ?>"><i class="fas fa-edit" style="margin-right: -3px"></i></a>
                                                <a class="btn btn-outline-warning" href="../../../elements/admin/delete_shop_process.php?id=<?= $shop_owner['shop_owner_id']; ?>" onclick="return confirm('Sure. You want to delete?')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Shop Name</th>
                                        <th>Street Address</th>
                                        <th>Thana</th>
                                        <th>State</th>
                                        <th>Mobile</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Registration Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php
include_once('../views/script.php');

