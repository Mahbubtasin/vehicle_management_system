<?php
session_start();

include_once ('../../vendor/autoload.php');
use University\admin\category;

$category = new category();
$categories = $category->showCategory();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vehicle Service</title>
    <link rel="icon" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!-- animate CSS -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="public/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<?php

include_once ('../view/header.php');
?>
<form action="../../elements/shop/add_product_process.php" method="post" enctype="multipart/form-data">

        <div>
            <h3><div class="card-header text-center" style="font-weight: bold">Product Add Page</div></h3>
        </div>
    <div class=" card-body form-group-product">
    <div class="row form-group">
        <label for="exampleInputProductName">Product Name</label>
        <input type="text" class="form-control" id="exampleInputProductName" aria-describedby="emailHelp" name="productName">
<!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
        <div class="form-group">
                <label for="sel1">Category</label>
                <select class="form-control" id="sel1" name="category_name">
                    <option selected>-----Select Category-----</option>
                    <?php
                    foreach ($categories as $cate) {
                    ?>
                    <option value="<?= $cate['category_name']; ?>"><?= $cate['category_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
        </div>
    <div class="row form-group">
        <label for="exampleInputTitle">Title</label>
        <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="emailHelp" name="title">
        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="row form-group">
        <label for="exampleInputDescription">Description</label>
        <textarea type="text" class="form-control" id="exampleInputDescription" aria-describedby="emailHelp" name="description"></textarea>
        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="row form-group">
        <label for="exampleInputPicture">Picture</label>
        <input type="file" class="form-control" id="exampleInputPicture" aria-describedby="emailHelp" name="picture">
        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="row form-group">
        <label for="exampleInputPrice">Price</label>
        <input type="text" class="form-control" id="exampleInputPrice" aria-describedby="emailHelp" name="price">
        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    </div>
    <button type="submit" class="btn_1 btn btn-success" style="
                                                            margin-left: 560px;
                                                            margin-bottom: 50px;
                                                            line-height: 24px;
                                                            margin-top: 25px;
                                                            padding-left: 80px;
                                                            padding-right: 80px;
                                                            padding-top: 10px;
                                                            padding-bottom: 10px;
                                                                                    ">Submit</button>
</form>
<?php
include_once ('../view/footer.php');

//include_once ('../view/script.php');
?>
<!-- jquery plugins here-->
<!--<script src="public/js/jquery-1.12.1.min.js"></script>-->
<!-- popper js -->
<script src="public/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="public/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="public/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="public/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="public/js/mixitup.min.js"></script>
<!-- particles js -->
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="public/js/slick.min.js"></script>
<script src="public/js/jquery.counterup.min.js"></script>
<script src="public/js/waypoints.min.js"></script>
<script src="public/js/contact.js"></script>
<script src="public/js/jquery.ajaxchimp.min.js"></script>
<script src="public/js/jquery.form.js"></script>
<script src="public/js/jquery.validate.min.js"></script>
<script src="public/js/mail-script.js"></script>
<!-- custom js -->
<script src="public/js/custom.js"></script>
</body>

</html>
