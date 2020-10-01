<?php
session_start();

$category_id = $_GET['id'];

include_once('../../../vendor/autoload.php');



include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\category;
$category = new category();
$show_categories = $category->show_single_Category($category_id);
?>
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="../../../elements/admin/edit_category_process.php" method="post" enctype="multipart/form-data">
                            <div class="from-group" style="margin-left: 350px">
                                <input type="hidden" name="category_id" value="<?= $show_categories['category_id']; ?>">
                                <input type="text" class="form-control" placeholder="Enter Category" name="category_name" style="width: 350px" value="<?= $show_categories['category_name']; ?>">
                            </div>
                            <button type="submit" id="submit_btn" class="btn btn-outline-success" style="margin-left: 350px;margin-top: 20px;padding-left: 30px;padding-right: 30px">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include_once('../views/script.php');
