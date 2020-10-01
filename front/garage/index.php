<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (empty($_POST['email'])) {
        $emailError = 'Email is empty';
    } else {
        $email = $_POST['email'];

        // validating the email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Invalid email';
        }
    }
    if (empty($_POST['message'])) {
        $messageError = 'Message is empty';
    } else {
        $message = $_POST['message'];
    }
    $name = $_POST['name'];
    if (empty($emailError) && empty($messageError)) {
//		$date = date('j, F Y h:i A');

        $emailBody = "
			<html>
			<head>
				<title>$email is contacting you</title>
			</head>
			<body style=\"background-color:#fafafa;\">
				<div style=\"padding:20px;\">
					Name: <span style=\"...\">$name</span>
					<br>
					Email: <span style=\"color:#888\">$email</span>
					<br>
					Message: <div style=\"color:#888\">$message</div>
				</div>
			</body>
			</html>
		";

        $headers = 	'From: Contact From <contact@mydomain.com>' . "\r\n" .
            "Reply-To: $email" . "\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-Type: text/html; charset=iso-8859-1\r\n";

        $to = 'tasinmahbub79@gmail.com';
        $subject = $_POST['subject'];

        if (mail($to, $subject, $emailBody, $headers)) {
            $sent = true;
        }
    }
}

include_once ('../../vendor/autoload.php');

use University\garage\garage_info;

$garage = new garage_info();
$name = $garage->show_name();
?>

<?php include_once ('view/head.php'); ?>

<?php include_once ('view/header.php'); ?>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading text-uppercase"></div>
                <!--        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>-->
            </div>
        </div>
    </header>



  <!-- Contact -->
  <section class="contact-section padding_top" style="padding-top: 50px;" id="contact1">
      <div class="container">
          <div class="row">
              <!--      <div class="d-none d-sm-block mb-5 pb-4">-->
              <!--        <div id="map" style="height: 480px;"></div>-->
              <!--        <script>-->
              <!--          function initMap() {-->
              <!--            var uluru = {-->
              <!--              lat: 22.3588994,-->
              <!--              lng: 91.8078598-->
              <!--            };-->
              <!--            var grayStyles = [{-->
              <!--                featureType: "all",-->
              <!--                stylers: [{-->
              <!--                    saturation: -90-->
              <!--                  },-->
              <!--                  {-->
              <!--                    lightness: 50-->
              <!--                  }-->
              <!--                ]-->
              <!--              },-->
              <!--              {-->
              <!--                elementType: 'labels.text.fill',-->
              <!--                stylers: [{-->
              <!--                  color: '#ccdee9'-->
              <!--                }]-->
              <!--              }-->
              <!--            ];-->
              <!--            var map = new google.maps.Map(document.getElementById('map'), {-->
              <!--              center: {-->
              <!--                lat: 22.3588994,-->
              <!--                lng: 91.8078598-->
              <!--              },-->
              <!--              zoom: 9,-->
              <!--              styles: grayStyles,-->
              <!--              scrollwheel: false-->
              <!--            });-->
              <!--          }-->
              <!--        </script>-->
              <!--        <script-->
              <!--          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmZAockJsAE4vBX3bAP-eMfi7skPH0IxM&callback=initMap">-->
              <!--        </script>-->
              <!---->
              <!--      </div>-->
              <div class="col-lg-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8604001927633!2d91.80785981449384!3d22.35889938529319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8ed7949c335%3A0x77d2c2464c1bd6d9!2sPort%20City%20International%20University!5e0!3m2!1sen!2sbd!4v1574710780037!5m2!1sen!2sbd" width="100%" height="480" frameborder="20" style="border:;" allowfullscreen=""></iframe>
              </div>


              <div class="col-lg-6">
                  <div class="row">
                      <div class="col-12">
                          <!--          <h2 class="contact-title">Get in Touch</h2>-->
                      </div>
                      <div class="col-lg-12">
                          <form class="form-contact contact_form" action="" method="POST" id="contactForm"
                                novalidate="novalidate">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                            placeholder='Enter Message' style="border: 2px solid #7045cc;"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                                                 onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name' style="border: 2px solid #7045cc;">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                                                 onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address' style="border: 2px solid #7045cc;">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                                                 onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject' style="border: 2px solid #7045cc;">
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group mt-3">
                                  <button class="btn_1 button-contactForm" type="submit" name="submit" value="submit" style="color: #c6822a;margin-bottom: 70px;margin-top: 38px;border: 2px solid">Send Message</button>
                              </div>
                          </form>
                          <?php
                          if (isset($emailError) || isset($messageError)) :
                              ?>
                              <div id="error-message">
                                  <?php
                                  echo isset($emailError) ? $emailError . '<br>' : '';
                                  echo isset($messageError) ? $messageError . '<br>' : '';
                                  ?>
                              </div>
                          <?php
                          endif;
                          ?>

                          <?php
                          if (isset($sent) && $sent === true) :
                              ?>
                              <div id="done-message">
                                  Your data was succesfully submitted
                              </div>
                          <?php
                          endif;
                          ?>


                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section>



  <?php
  include_once ('../view/footer.php');
  ?>


<?php
include_once ('../view/script.php');
