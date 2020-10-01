<?php
session_start();

//$id = $_GET['id'];
include_once ('../../vendor/autoload.php');
use University\shop\product;

$item = new product();
$product = $item->product_details();

include_once ('../view/head.php');
include_once ('../view/header.php');
?>
<div class="container" style="padding: 50px;">
    <div class="card">
        <div class="card-header text-center">
            <h2><?= $product['product_name']; ?> Details</h2>
        </div>
        <div class="card-body">
            <div class="col-lg-4 order-lg-1">
                <img src="../../resources/product_photo/<?= $product['picture']; ?>">
            </div>
            <div class="col-lg-8 order-lg-2">
                <div>
                    <h3>Title</h3>
                    <p><?= $product['title']; ?></p>
                </div>
                <div>
                    <h3>Description</h3>
                    <p><?= $product['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once ('../view/footer.php');
include_once ('../view/script.php');
?>
