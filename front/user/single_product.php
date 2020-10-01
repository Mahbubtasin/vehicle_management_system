<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\user\productShow;
$id = $_GET['id'];
$product = new productShow();
$single_product = $product->productDescription($id);

include_once ('../view/head.php');

include_once ('../view/header.php');
?>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>Home/Shop/Single product</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<div class="product_image_area section_padding">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-5">
                <div class="product_slider_img">
                    <div id="vertical">
                        <div data-thumb="../../resources/product_photo/<?= $single_product['picture']; ?>">
                            <img src="../../resources/product_photo/<?= $single_product['picture']; ?>" />
                        </div>
<!--                        <div data-thumb="img/product_details/prodect_details_2.png">-->
<!--                            <img src="img/product_details/prodect_details_2.png"/>-->
<!--                        </div>-->
<!--                        <div data-thumb="img/product_details/prodect_details_3.png">-->
<!--                            <img src="img/product_details/prodect_details_3.png" />-->
<!--                        </div>-->
<!--                        <div data-thumb="img/product_details/prodect_details_4.png">-->
<!--                            <img src="img/product_details/prodect_details_4.png" />-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?= $single_product['product_name']; ?></h3>
                    <h2>TAKA : <?= $single_product['price']; ?></h2>
                    <ul class="list">
                        <li>
                            <a class="active">
                                <span>Category</span> :   <?= $single_product['category_name']; ?></a>
                        </li>
<!--                        <li>-->
<!--                            <a href="#"> <span>Availibility</span> : In Stock</a>-->
<!--                        </li>-->
                    </ul>
                    <p>
                        <?= $single_product['title']; ?>
                    </p>
                    <div class="card_area">
                        <div class="product_count d-inline-block">
                            <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                            <input class="input-number" type="text" value="1" min="0" max="10">
                            <span class="number-increment"> <i class="ti-plus"></i></span>
                        </div>
                        <div class="add_to_cart">
                            <a href="checkout.php?id=<?= $shop_id; ?>" class="btn_3">add to cart</a>
<!--                            <a href="#" class="like_us"> <i class="ti-heart"></i> </a>-->
                        </div>
<!--                        <div class="social_icon">-->
<!--                            <a href="#" class="fb"><i class="ti-facebook"></i></a>-->
<!--                            <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>-->
<!--                            <a href="#" class="li"><i class="ti-linkedin"></i></a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                   aria-selected="true">Description</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"-->
<!--                   aria-selected="false">Specification</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"-->
<!--                   aria-selected="false">Comments</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"-->
<!--                   aria-selected="false">Reviews</a>-->
<!--            </li>-->
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                    <?= $single_product['description']; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php
include_once ('../view/footer.php');
include_once ('../view/script.php');
?>

