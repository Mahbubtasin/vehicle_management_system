<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <!--  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../public/css/style.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="container">
                    <p class="text-center font-weight-bold mt-2">
                        <?php
                        //                        if (isset($_SESSION['username'])) {
                        //                            echo $_SESSION['messages'];
                        //
                        //                        } else {
                        //                            $_SESSION['messages'] = "";
                        //                        }

                        if (isset($_SESSION['admin_login_error'])) {
                            echo $_SESSION['admin_login_error'];
                            unset($_SESSION['admin_login_error']);
                        }
                        if (isset($_SESSION['user_login_error'])) {
                            echo $_SESSION['user_login_error'];
                            unset($_SESSION['user_login_error']);
                        }
                        if (isset($_SESSION['shop_login_error'])) {
                            echo $_SESSION['shop_login_error'];
                            unset($_SESSION['shop_login_error']);
                        }
                        if (isset($_SESSION['garage_login_error'])) {
                            echo $_SESSION['garage_login_error'];
                            unset($_SESSION['garage_login_error']);
                        }
                        if (isset($_SESSION['register_messages'])) {
                            echo $_SESSION['register_messages'];
                            unset($_SESSION['register_messages']);
                        }
                        ?>
                    </p>
                </div>
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <!--            <div class="row">-->
                    <!--              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <hr>
                            <form class="user" method="post" action="../../elements/connection/login_connection.php"
                                  enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                           name="email" aria-describedby="emailHelp"
                                           placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleInputPassword" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <select type="text" class="form-control" id="exampleInputEmail" name="type"
                                            aria-describedby="emailHelp" style="font-size: 0.8rem;border-radius: 10rem">
                                        <option value="2" selected>-----Select User-type-----</option>
                                        <option value="0">User</option>
                                        <option value="1">Shop Owner</option>
                                        <option value="3">Garage Owner</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login
                                </button>
                                <!--                    <hr>-->
                                <!--                    <a href="index.html" class="btn btn-google btn-user btn-block">-->
                                <!--                      <i class="fab fa-google fa-fw"></i> Login with Google-->
                                <!--                    </a>-->
                                <!--                    <a href="index.html" class="btn btn-facebook btn-user btn-block">-->
                                <!--                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook-->
                                <!--                    </a>-->
                            </form>
                            <hr>
                            <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <a class="btn btn-outline-primary" href="../shop/shop_register.php"
                                   style="font-size: 12px">Register As a Shop Owner</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-outline-primary" href="register.php"
                                   style="font-size: 12px;padding-left: 30px;padding-right: 30px">Register As an
                                    User</a>
                            </div>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-outline-primary" href="forgot-password.php"
                                   style="font-size: 12px;padding-right: 111px;padding-left: 111px">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <!--            </div>-->
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="public/js/sb-admin-2.min.js"></script>

</body>

</html>
