<?php
session_start();

include_once('../views/head.php');
include_once('../views/navbar.php');
include_once('../views/sidebar.php');
include_once('../views/content_header.php');

use University\admin\category;

$category = new category();
$show_categories = $category->showCategory();
?>
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="../../../elements/admin/add_category_process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group" style="margin-left: 350px">
                                <input type="text" class="form-control" placeholder="Enter Category" name="category_name" style="width: 350px">
                            </div>
                            <button type="submit" id="submit_btn" class="btn btn-outline-success" style="margin-left: 350px;padding-left: 30px;padding-right: 30px">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>All Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-hover text-center">
                                <thead>
                                <tr>
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($show_categories as $categoryOne) {
                                    ?>
                                    <tr>
                                        <th><?= $categoryOne['category_id']; ?></th>
                                        <th><?= $categoryOne['category_name']; ?></th>
                                        <th>
                                            <a class="btn btn-outline-success" href="update_category.php?id=<?= $categoryOne['category_id']; ?>"><i class="fas fa-edit" style="margin-right: -3px"></i></a>
                                            <a class="btn btn-outline-danger" href="../../../elements/admin/delete_category.php?id=<?= $categoryOne['category_id']; ?>" onclick="return confirm('You want to delete this category?')"><i class="fas fa-trash"></i></a>
                                        </th>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include_once('../views/script.php');
