<?php
session_start();
include_once('../../../vendor/autoload.php');

include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\all_admin;
$admin = new all_admin();
$show_all_admin = $admin->show_admin();
?>
    <section>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Admin</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($show_all_admin as $admin_all) {
                                    ?>
                                    <tr>
                                        <td><?= $admin_all['id']; ?></td>
                                        <td><?= $admin_all['first_name']; ?> <?= $admin_all['last_name']; ?></td>
                                        <td><?= $admin_all['email']; ?></td>
                                        <td><?= $admin_all['password']; ?></td>
                                        <td><?= $admin_all['phone']; ?></td>
                                        <td style="text-align: center">
                                            <a class="btn btn-outline-primary" href="update_admin.php?id=<?= $admin_all['id']; ?>"><i class="fas fa-edit" style="margin-right: -3px"></i></a>
                                            <a class="btn btn-outline-primary" href="../../../elements/admin/delete_admin_process.php?id=<?= $admin_all['id']; ?>" onclick="return confirm('Sure. You want to delete?')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php
include_once('../views/script.php');
