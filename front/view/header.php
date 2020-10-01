<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-11">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="../user/user_index.php" style="font-size: 22px">Vehicle Service</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav" style="margin-left: 620px">
                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['username'])) {
                                    ?>
                                    <a class="nav-link" href="../user/user_index.php">Home</a>
                                    <?php
                                } elseif (isset($_SESSION['shop_owner_id'])) {
                                    ?>
                                    <a class="nav-link" href="../shop/index.php">Home</a>
                                    <?php
                                } else {
                                    ?>
                                    <a class="nav-link" href="../user/user_index.php">Home</a>
                                    <?php
                                }
                                ?>
                            </li>

                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['username'])) {
                                ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbar"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   style="text-transform: none">
                                    Find
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
<!--                                    <a class="dropdown-item" href="user_location.php">My location</a>-->
                                    <a class="dropdown-item" href="find_shop.php">Shop location</a>
                                    <a class="dropdown-item" href="find_garage.php">Garage location</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../user/cart.php">Cart</a>
                            </li>
                            <?php
                            }
                            elseif (isset($_SESSION['shop_owner_id'])) {
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbar"
                                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                       style="text-transform: none">
                                        Product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="add_product.php">Add Product</a>
                                        <a class="dropdown-item" href="view_product.php">View Product</a>
                                        <!--                                    <a class="dropdown-item" href="find_garage.php">Garage location</a>-->
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../user/contact.php">Contact</a>
                            </li>

                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['username'])) {
                                ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbar"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   style="text-transform: none">
                                    Hi! <?= $_SESSION['username'] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="../user/user_profile.php">Profile</a>
                                    <a class="dropdown-item"
                                       href="../../elements/connection/logout/logout.php">Logout</a>
                                </div>
                            </li>
                        <?php
                        }
                        elseif (isset($_SESSION['shop_owner_id'])) {
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbar"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   style="text-transform: none">
                                    Setting
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="profile_setting.php">Profile</a>
                                    <a class="dropdown-item"
                                       href="../../elements/connection/logout/logout.php">Logout</a>
                                </div>
                            </li>
                            <?php
                        } else {
                            ?>


                            <a class="nav-link" href="login.php" style="margin-left: -40px"><i class="ti-user"></i>
                                Login/Signup</a>

                            <?php
                        }
                        ?>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!--    <div class="search_input" id="search_input_box">-->
    <!--        <div class="container ">-->
    <!--            <form class="d-flex justify-content-between search-inner">-->
    <!--                <input type="text" class="form-control" id="search_input" placeholder="Search Here">-->
    <!--                <button type="submit" class="btn"></button>-->
    <!--                <span class="ti-close" id="close_search" title="Close Search"></span>-->
    <!--            </form>-->
    <!--        </div>-->
    <!--    </div>-->
</header>
<!-- Header part end-->