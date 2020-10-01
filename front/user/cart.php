<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\user\cart;
$cart = new cart();
$show = $cart->cartShow();

include_once ('../view/head.php');

include_once ('../view/header.php');
?>

<?php
if (empty($show))
{
    ?>
    <div class="card">
    <div class="card-header">
        <h2 style="text-align: center">Cart</h2>
    </div>
    <div class="card-body">
    <table class="table table-hover">
    <thead style="text-align: center">
    <tr>
        <th scope="col">Picture</th>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Total Price</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="6" style="text-align: center;">
            <h3 style="margin: 100px 0px 100px 0px">Empty Cart</h3>
        </td>
    </tr>
    </tbody>
    </table>

    <div class="cart_buttons">
        <a href="checkout.php" class="btn btn-outline-secondary"
           style="padding-left: 70px;padding-right: 70px;margin-left: 45px">Checkout</a>
    </div>
    </div>
    </div>
    <?php
}
else {
    ?>
    <div class="card">
        <div class="card-header">
            <h2 style="text-align: center">Cart</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead style="text-align: center">
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody style="text-align: center">
                <?php
                $orderTotal = 0;
                foreach ($show as $display) {
                    $orderTotal = $orderTotal + $display['total_price'];
                    ?>
                    <tr>
                        <td><img src="../../resources/product_photo/<?= $display['product_picture']; ?>"
                                 style="width: 100px;height: 80px"></td>
                        <td><?= $display['product_name']; ?></td>
                        <td><?= $display['quantity']; ?></td>
                        <td><?= $display['price']; ?></td>
                        <td><?= $display['total_price']; ?></td>
                        <td><a class="btn btn-danger"
                               href="../../elements/user/cart_delete.php?id=<?= $display['id']; ?>">Remove</a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <!-- Order Total -->
            <div class="order_total">
                <div class="order_total_content">
                    <div class="order_total_title" style="font-size: 20px;font-weight: bold;padding-left: 79%">Total
                        Amount : $<?= $orderTotal;
                        $_SESSION['total_cost'] = $orderTotal; ?></div>
                    <div class="order_total_amount"></div>
                </div>
            </div>
            <div class="cart_buttons">
                <a href="checkout.php" class="btn btn-outline-secondary"
                   style="padding-left: 70px;padding-right: 70px;margin-left: 45px">Checkout</a>
            </div>
        </div>
    </div>
    <?php
}
    ?>
    <script>
        function deleteProduct(id) {

            var id= id;
            console.log(id);
            $.ajax({
                type: "POST",
                url: "cart_delete.php",
                data: {
                    id: id
                },
                success: function (value) {
                    $("#card-body").html(value);
                    /*$("#cart_count").html($slNo),*/
                    $("#cart_icon").load('shop.php #cart_icon')
                    $("#refresh_cart").load('cart.php #refresh_cart')
                }
            });
        }
    </script>
<?php
include_once ('../view/footer.php');

include_once ('../view/script.php');

