<?php
session_start();

include_once ('../../vendor/autoload.php');
use University\shop\product;

$product = new product();
$products = $product->show_product();
$allProducts = count($products);

include_once ('../view/head.php');

include_once ('../view/header.php');

?>
<div class="container" style="padding: 50px">
<div class="card">
    <div class="card-header text-center">
        <h3>All Product</h3>
    </div>
    <div class="product_count">
        <h5><div class="shop_product_count" style="margin-top: 10px;margin-left: 20px;font-size: 20px">Total : <span style="font-weight: bold;color: blue"><?= $allProducts; ?></span> Product Found <a class="btn btn-outline-secondary" href="add_product.php" style="padding: 0px 5px 0px 5px">Add Item</a></div></h5>
    </div>
    <div class="card-body text-center" style="margin-top: -20px">
        <table class="table table-hover">
            <thead style="text-align: center">
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Picture</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody style="text-align: center">
            <?php
            foreach ($products as $productOne) {
                ?>
                <tr>
                    <td style="padding: 25px"><a href="product_details.php?id=<?= $productOne['product_id']; ?>"><?= $productOne['product_name']; ?></a></td>

                    <td style="padding: 25px"><?= $productOne['category_name']; ?></td>

                    <td><img src="../../resources/product_photo/<?= $productOne['picture']; ?>" style="width: 70px;height: 60px"></td>

                    <td style="padding: 25px"><?= $productOne['price']; ?></td>

                    <td style="padding: 20px">
                        <a class="btn btn-outline-dark" href="edit_product.php?id=<?= $productOne['product_id']; ?>"><i class="fas fa-edit" style="margin-right: -3px"></i></a>
                        <a href="../../elements/shop/delete_product_process.php?id=<?= $productOne['product_id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php
include_once ('../view/footer.php');

include_once ('../view/script.php');
?>
