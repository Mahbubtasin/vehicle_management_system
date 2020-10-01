<?php
session_start();

include_once('../../../vendor/autoload.php');

include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');
?>
<section class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Admin</h4>
                </div>
                <div class="card-body">
                    <form action="../../../elements/admin/add_admin_process.php" method="post" enctype="multipart/form-data">
                        <div class="add_admin" style="margin-left: 330px;width: 30%">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                            <input type="hidden" name="usertype" value="admin">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <input type="" class="form-control" name="password" placeholder="Enter Password">
                        </div>
<!--                        <div class="form-group">-->
<!--                            <input type="" class="form-control" name="repeat_password" placeholder="Enter Password Again">-->
<!--                        </div>-->
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <button type="submit" id="submit_btn" class="btn btn-outline-primary" style="margin-left: 330px;padding-left: 30px;padding-right: 30px">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('../views/script.php');