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
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

  <title>Register</title>

  <!-- Custom fonts for this template-->
<!--  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="public/css/style.min.css" rel="stylesheet">
  <link href="public/css/password.css" rel="stylesheet">
<!--  <link href="public/css/password_style.css" rel="stylesheet">-->

    <script>
        function checkemailavailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url:"../../elements/connection/check_available.php",
                data:'email='+$("#exampleInputEmail").val(),
                type:"POST",
                success:function (data) {
                    $("#user-email-availability").html(data);
                    $("#loaderIcon").hide();
                },
                error:function () {
                }
            });
        }


        function checkusernameavailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "../../elements/connection/check_available.php",
                data: 'username='+$("#exampleUserName").val(),
                type: "POST",
                success:function (data) {
                    $("#user-username-availability").html(data);
                    $("#loaderIcon").hide();
                },
                error:function () {
                }
            });
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
</head>

<body class="bg-gradient-primary">



  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-9 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-4">
        <div class="container">
            <p class="text-center font-weight-bold mt-2">
                <?php
//                if (isset($_SESSION['username']))
//                {
//                    echo $_SESSION['messages'];
//                }
//                else
//                {
//                    $_SESSION['message']="";
//                }
                if (isset($_SESSION['error_message']))
                {
                    echo $_SESSION['error_message'];
                    unset($_SESSION['error_message']);
                }
                ?>
            </p>
        </div>
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
<!--        <div class="row">-->
<!--          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create User Account!</h1>
              </div>
                <hr>
              <form class="user" method="post" action="../../elements/connection/register_connection.php" name="register" enctype="multipart/form-data">
                  <div id="error_msg"></div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="firstname" placeholder="First Name" required>
                      <input type="hidden" name="usertype" value="user">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="lastname" placeholder="Last Name" required>
                  </div>
                </div>
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" onblur="checkemailavailability()" placeholder="Email Address" required><span id="user-email-availability"></span>
                </div>
				<div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleUserName" name="username" onblur="checkusernameavailability()" placeholder="User Name" required><span id="user-username-availability"></span>
				</div>
				</div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="password_1" placeholder="Password" required>
                      <meter max="4" id="password-strength-meter" style="width: 294px"></meter>
                      <p id="password-strength-text"></p>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="password_2" placeholder="Repeat Password" required>
                  </div>
                </div>
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="tel" class="form-control form-control-user" id="exampleInputNumber" name="phone" placeholder="Phone Number" style="margin-top: -30px" required>
                      </div>
                      <div class="col-sm-6" style="margin-top: -45px">
<!--                          <input type="tel" class="form-control form-control-user" id="exampleInputNumber" name="phone" placeholder="Phone Number" required>-->
                          <div>
                          Gender:
                          <input type="radio" name="gender" value="female" style="margin-top: 18px;">Female
                          <input type="radio" name="gender" value="male" style="margin-top: 18px;">Male
<!--                          <input type="radio" name="gender" value="other" style="margin-top: 18px;">Other-->
                      </div>
                          <div class="form-group">
                              <!--                                    <label for="input-img">Picture</label>-->
                              <input type="file" class="form-control-file" id="input-img" name="picture" value=""  placeholder="">
                          </div>
                      </div>
                  </div>
                <button class="btn btn-primary btn-user btn-block" type="submit" name="register" id="reg_btn">Register Account</button>
<!--                  <div class="dropdown">-->
<!--                      <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials-->
<!--                          <span class="caret"></span></button>-->
<!--                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">-->
<!--                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>-->
<!--                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>-->
<!--                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>-->
<!--                          <li role="presentation" class="divider"></li>-->
<!--                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>-->
<!--                      </ul>-->
<!--                  </div>-->
<!--                <hr>-->
<!--                <a href="index.html" class="btn btn-google btn-user btn-block">-->
<!--                  <i class="fab fa-google fa-fw"></i> Register with Google-->
<!--                </a>-->
<!--                <a href="index.html" class="btn btn-facebook btn-user btn-block">-->
<!--                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook-->
<!--                </a>-->
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="public/js/password.js"></script>
<!--<script src="../../public/js/script.js"></script>-->



</body>

</html>
