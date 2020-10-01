<?php
session_start();
include_once('../../vendor/autoload.php');

$x = 0;

use University\db;

try {
    $conn = new PDO("mysql:host=localhost;dbname=vehicle_service", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$id = $_POST['id'];
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM `product` WHERE `category_id` = '$id'";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();


    while ($result = $stmt->fetch()) {
        $show[] = $result;
    }
}
?>

<?php
if (empty($show)) {
//    echo "No Product Found";
    ?>
    <div class="single_product" style="margin-top: 300px;margin-left: 350px;font-weight: bolder;font-style: italic">
        <h4>No Product Found</h4>
    </div>
    <?php
} else {
    foreach ($show as $productOne) {
        ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../resources/product_photo/<?= $productOne['picture']; ?>" alt="" style="height: 200px"></a>
                <div class="icon">
                    <ul>
                        <li><a href="#" style="margin-left: 40px;margin-bottom: 20px"><i class="ti-shopping-cart-full"></i></a></li>
                        <li><a href="single_product.php" style="margin-left: 40px"><i class="ti-info"></i></a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-title" style="font-size: 25px;font-style: italic">
                        <!--                                <a href="#">Item One</a>-->
                        <?= $productOne['product_name'];$x = $x + 1; ?>
                    </h4>
                    <!--                            <h5>$24.99</h5>-->
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
}
?>
