<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav" style="padding: 20px;background-color: darkcyan">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Garage</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="view_worker.php">Worker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="all_service.php">service</a>
                </li>
                <!--          <li class="nav-item">-->
                <!--            <a class="nav-link js-scroll-trigger" href="#about">About</a>-->
                <!--          </li>-->
                <!--          <li class="nav-item">-->
                <!--            <a class="nav-link js-scroll-trigger" href="#team">Team</a>-->
                <!--          </li>-->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact1">Contact</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['garage_id']))
                    {
                    ?>
                    <a class="nav-link js-scroll-trigger" href="../../elements/connection/logout/logout.php">Logout</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

