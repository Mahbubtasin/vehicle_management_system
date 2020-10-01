<?php
session_start();
include_once('../../../vendor/autoload.php');



include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\all_user;
$user = new all_user();
$show_all_user = $user->show_user();
?>
    <section>
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All User</h4>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Picture</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Registration Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($show_all_user as $users) {
                                    ?>
                                    <tr>
                                        <th><?= $users['id']; ?></th>
                                        <td><?= $users['first_name']; ?></td>
                                        <td><?= $users['last_name']; ?></td>
                                        <td><?= $users['username']; ?></td>
                                        <td><?= $users['email']; ?></td>
                                        <td><?= $users['password']; ?></td>
                                        <td><img src="../../../resources/user_profile_pic/<?= $users['picture']; ?>" style="width: 70px;height: 60px"></td>
                                        <td><?= $users['phone']; ?></td>
                                        <td><?= $users['gender']; ?></td>
                                        <td><?= $users['created_at']; ?></td>
                                        <td style="text-align: center">
                                            <a class="btn btn-outline-secondary" href="update_user.php?id=<?= $users['id']; ?>"><i class="fas fa-edit" style="margin-right: -3px"></i></a>
                                            <a class="btn btn-outline-secondary" href="../../../elements/admin/delete_user_process.php?id=<?= $users['id']; ?>" onclick="return confirm('Sure. You want to delete?')"><i class="fas fa-trash"></i></a>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Picture</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
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

