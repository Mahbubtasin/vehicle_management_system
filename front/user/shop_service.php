<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\user\profile;
$show = new profile();
$showUser = $show->show_profile();

include_once ('../view/head.php');

include_once ('../view/header.php');
?>
    <p style="text-align: center;margin-top: 30px"><img src="https://cdn.jotfor.ms/img/check-icon.png" alt="" width="128" height="128" /></p>
    <div style="text-align: center;margin-bottom: 50px;">
        <h1 style="text-align: center;">Thank You!</h1>
        <p style="font-size: 30px;color: blue">
            <?= $showUser['first_name'] ?> <?= $showUser['last_name'] ?>
        </p>
        <p style="text-align: center;font-size: 20px;color:red;">For purchase product...</p>

        <a class="btn btn-outline-secondary" href="user_index.php">Go Home</a>
    </div>
<?php
include_once ('../view/footer.php');

include_once ('../view/script.php');
