<?php
session_start();

$shop_id = $_GET['id'];

include_once('../../vendor/autoload.php');

use University\user\productShow;

$data = new productShow();
$show1 = $data->showProduct1($shop_id);

//$product = new productShow();
//$show = $product->showProduct($shop_id);

$x = 0;

//use University\shop\product;
//$products = new product();
//$shopProduct = $products->shop_wise_product($shop_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vehicle Service</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/themify-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--  <link href="css/shop-homepage.css" rel="stylesheet">-->

</head>

<body>

<!-- Navigation -->
<!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">-->
<!--    <div class="container">-->
<!--      <a class="navbar-brand" href="#">Start Bootstrap</a>-->
<!--      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--      </button>-->
<!--      <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--        <ul class="navbar-nav ml-auto">-->
<!--          <li class="nav-item active">-->
<!--            <a class="nav-link" href="#">Home-->
<!--              <span class="sr-only">(current)</span>-->
<!--            </a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="#">About</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="#">Services</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="#">Contact</a>-->
<!--          </li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
<!--  </nav>-->
<?php
include_once('../view/header.php');
?>
<!-- Page Content -->
<div class="container">

    <div class="row">

<!--        <div class="col-lg-3">-->
<!---->
<!--            <h1 class="my-4">Shop Name</h1>-->
<!--            <div class="list-group">-->
<!--                --><?php
//                foreach ($categories as $categoriesOne) {
//                    ?>
<!--                    <a href="#" class="list-group-item">--><?//= $categoriesOne['category_name']; ?><!--</a>-->
                    <!--          <a href="#" class="list-group-item">Category 2</a>-->
                    <!--          <a href="#" class="list-group-item">Category 3</a>-->
<!--                    --><?php
//                }
//                ?>
<!--            </div>-->
<!---->
<!--        </div>-->
        <!-- /.col-lg-3 -->
        <?php
        if (empty($show1)) {
            ?>
            <div class="col-lg-12">

                <!--        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">-->
                <!--          <ol class="carousel-indicators">-->
                <!--            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
                <!--            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
                <!--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                <!--          </ol>-->
                <!--          <div class="carousel-inner" role="listbox">-->
                <!--            <div class="carousel-item active">-->
                <!--              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">-->
                <!--            </div>-->
                <!--            <div class="carousel-item">-->
                <!--              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">-->
                <!--            </div>-->
                <!--            <div class="carousel-item">-->
                <!--              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
                <!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--            <span class="sr-only">Previous</span>-->
                <!--          </a>-->
                <!--          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
                <!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--            <span class="sr-only">Next</span>-->
                <!--          </a>-->
                <!--        </div>-->

                <p style="text-align: center;margin-top: 30px"><img src="../../resources/oops-smiley.jpg" alt="" width="128" height="128" /></p>
                <div style="text-align: center;margin-bottom: 50px;">
                    <h1 style="text-align: center;color: red">There is No Product!!!</h1>
                    <a class="btn btn-outline-secondary" href="find_shop.php">Go Back</a>
                </div>
                <!-- /.row -->

            </div>
            <?php
        }
        else {
            ?>
            <div class="col-lg-12">

                <!--        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">-->
                <!--          <ol class="carousel-indicators">-->
                <!--            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
                <!--            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
                <!--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                <!--          </ol>-->
                <!--          <div class="carousel-inner" role="listbox">-->
                <!--            <div class="carousel-item active">-->
                <!--              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">-->
                <!--            </div>-->
                <!--            <div class="carousel-item">-->
                <!--              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">-->
                <!--            </div>-->
                <!--            <div class="carousel-item">-->
                <!--              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
                <!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--            <span class="sr-only">Previous</span>-->
                <!--          </a>-->
                <!--          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
                <!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--            <span class="sr-only">Next</span>-->
                <!--          </a>-->
                <!--        </div>-->

                <div class="row" style="margin-top: 25px" id="productShow">
                    <?php
                    foreach ($show1 as $productOne) {
                        ?>
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top"
                                                 src="../../resources/product_photo/<?= $productOne['picture']; ?>"
                                                 alt=""
                                                 style="height: 200px"></a>
                                <div class="icon">
                                    <ul>
                                        <li><a href="#" onclick="add_data(<?= $productOne['product_id']; ?>)" style="margin-left: 40px;margin-bottom: 20px"><i
                                                        class="ti-shopping-cart-full"></i></a></li>
                                        <li><a href="single_product.php?id=<?= $productOne['product_id'];?>"
                                               style="margin-left: 40px"><i class="ti-info"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title" style="font-size: 25px;font-style: italic">
                                        <!--                                <a href="#">Item One</a>-->
                                        <?= $productOne['product_name'];
                                        $x = $x + 1; ?>
                                    </h4>
                                    <!--                            <h5>$24.99</h5>-->
                                    <p class="card-text" style="color: blue"><?= $productOne['category_name']; ?></p>
                                    <p class="card-text"><?= $productOne['title'] ?></p>
                                </div>
                                <!--                        <div class="card-footer" style="background-color: mistyrose;">-->
                                <!--                            <a href="#" style="margin-left: 40px"><i class="ti-shopping-cart-full"></i></a>-->
                                <!--                            <a href="#" style="margin-left: 30px"><i class="ti-info"></i></a>-->
                                <!--                        </div>-->
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <!-- /.row -->

            </div>
            <?php
        }
        ?>

        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php
include_once('../view/footer.php');
?>
<!-- Bootstrap core JavaScript -->
<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script>
    function catProduct(id) {
        var id = id;
        $.ajax(
            {
                type: "POST",
                url: "category_product.php",
                data: {
                    id: id
                },
                success: function (value) {
                    $("#productShow").html(value);
                }
            }
        );
    }
</script>
<script>
    function add_data(id) {

        var id= id;
        console.log(id);
        $.ajax({
            type: "POST",
            url: "../../elements/user/cart_process.php",
            data: {
                id: id
            },
            success: function (value) {
                $("#table_data").html(value);
                // console.log(value);
                $("#cart_icon").load('shop.php #cart_icon')
            }
        });
    }
</script>

</body>

</html>
