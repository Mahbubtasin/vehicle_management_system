<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\user\profile;
$profile = new profile();
$show_profile = $profile->show_profile();

use University\garage\garage_info;
$garage = new garage_info();
$showGarage = $garage->show_garage();

use University\user\cart;
$cart = new cart();
$show = $cart->cartShow();

include_once ('../view/head.php');

include_once ('../view/header.php');

?>
<style>
    .box
    {
        display: none;
    }
</style>
<div class="row">
    <div class="col-7">
<div class="card" style="margin-left: 30px;margin-right: 30p;margin-bottom: 50px">
    <div class="card-header" style="font-size: 20px;font-weight: bold">
        Billing
    </div>
    <div class="card-body">
        <form action="../../elements/user/checkout_process.php" method="post" enctype="multipart/form-data">
        <div class="form" style="margin-right: 150px;margin-left: 150px">
        <div class="row form-group">
            <label for="exampleInputName" style="font-weight: bolder;font-size: 15px;">Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name" value="<?= $show_profile['first_name']; ?> <?= $show_profile['last_name']; ?>">
            <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="row form-group">
            <label for="exampleInputNumber" style="font-weight: bolder;font-size: 15px;">Number</label>
            <input type="text" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp" name="number" value="0<?= $show_profile['phone']; ?>">
            <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="row form-group">
            <label for="exampleInputState" style="font-weight: bolder;font-size: 15px;">State</label>
            <input type="text" class="form-control" id="exampleInputState" aria-describedby="nameHelp" name="state">
            <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="row form-group">
            <label for="exampleInputAddress" style="font-weight: bolder;font-size: 15px;">Address</label>
            <input type="text" class="form-control" id="exampleInputAddress" aria-describedby="nameHelp" name="address">
            <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
            <div class="row form-group" style="font-size: 18px;font-weight: bold">
                Payment Method
            </div>
            <div class="row form-group">
                <label style="margin-right: 50px"><input type="radio" name="payment" value="cash"><img src="../../resources/cash.png" style="height: 50px"></label>
                <label><input type="radio" name="payment" value="bkash"><img src="../../resources/bkash.jpg" style="height: 50px"></label>
            </div>
            <div class="bkash box">
                <div class="row form-group">
                    <label for="exampleInputNumber" style="font-weight: bolder;font-size: 15px;">Send money to this number</label>
                    <input type="text" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp" value="0<?= $showGarage['phone']; ?>" readonly>
                    <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="row form-group">
                    <label for="exampleInputNumber" style="font-weight: bolder;font-size: 15px;">Your Number</label>
                    <input type="text" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp" name="bkashNumber" value="+880">
                    <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="row form-group">
                    <label for="exampleInputNumber" style="font-weight: bolder;font-size: 15px;">TrxID</label>
                    <input type="text" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp" name="trx_id">
                    <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
            </div>
            <div class="row form-group">
                <input type="hidden" class="form-control" name="user_id" value="<?= $show_profile['id']; ?>">
            </div>
        <button type="submit" class="btn btn-outline-success row form-group" style="width: 108%;">Submit</button>
    </div>
        </form>
    </div>
</div>
    </div>
    <div class="col-5">
        <?php
        if (empty($show)) {
        ?>
        <div class="card" style="margin-left: 30px;margin-right: 30px;margin-bottom: 50px">
            <div class="card-header" style="font-size: 20px;font-weight: bold">
                Cart Summary
            </div>
            <div class="card-body" style="text-align: center">
                <h3>Empty Cart!!!</h3>
            </div>
        </div>
        <?php
        }
        else
            {
        ?>
        <div class="card" style="margin-left: 30px;margin-right: 30px;margin-bottom: 50px">
            <div class="card-header" style="font-size: 20px;font-weight: bold">
                Cart Summary
            </div>
            <div class="card-body">
                <table class="table table-striped table-dark">
                    <thead style="text-align: center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total Price</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center">
                    <?php
                    $orderTotal = 0;
                    $counter = 0;
                    foreach ($show as $display) {
                        $orderTotal = $orderTotal + $display['total_price'];
                        ?>
                        <tr>
                            <td><?= ++$counter ?></td>
                            <td><?= $display['product_name']; ?></td>
                            <td><?= $display['quantity']; ?></td>
                            <td><?= $display['price']; ?></td>
                            <td><?= $display['total_price']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <div class="order_total">
                    <div class="order_total_content">
                        <div class="order_total_title" style="font-weight: bold;padding-left: 60%">Total
                            Amount : $<?= $orderTotal;
                            $_SESSION['total_cost'] = $orderTotal; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
        ?>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>
<?php
include_once ('../view/footer.php');

include_once ('../view/script.php');
