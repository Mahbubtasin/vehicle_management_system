<?php
session_start();
include_once('../../../vendor/autoload.php');



include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\all_garage;
$garage = new all_garage();
$show_all_garage = $garage->show_garage();
?>
    <section>
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Garage</h4>
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
                                        <th>Garage Name</th>
                                        <th>Title</th>
                                        <th>Street Address</th>
                                        <th>Mobile</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Registration Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($show_all_garage as $allgarage) {
                                        ?>
                                        <tr>
                                            <th><?= $allgarage['garage_id']; ?></th>
                                            <td><?= $allgarage['first_name']; ?></td>
                                            <td><?= $allgarage['last_name']; ?></td>
                                            <td><?= $allgarage['email']; ?></td>
                                            <td><?= $allgarage['password']; ?></td>
                                            <td><?= $allgarage['garage_name']; ?></td>
                                            <td><?= $allgarage['title'] ?></td>
                                            <td><?= $allgarage['street_address']; ?></td>
                                            <td><?= $allgarage['phone']; ?></td>
                                            <td><?= $allgarage['lat']; ?></td>
                                            <td><?= $allgarage['lng']; ?></td>
                                            <td><?= $allgarage['created_at']; ?></td>
                                            <td style="text-align: center">
                                                <a class="btn btn-outline-dark" href="update_garage.php?id=<?= $allgarage['garage_id']; ?>"><i class="fas fa-edit" style="margin-right: -3px"></i></a>
                                                <a class="btn btn-outline-dark" href="../../../elements/admin/delete_garage_process.php?id=<?= $allgarage['garage_id']; ?>" onclick="return confirm('Sure. You want to delete?')"><i class="fas fa-trash"></i></a>
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
                                        <th>Garage Name</th>
                                        <th>Title</th>
                                        <th>Street Address</th>
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

