<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="icon" href="public/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../../public/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../../public/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../../public/css/all.css">
    <link rel="stylesheet" href="../../public/css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../../public/css/flaticon.css">
    <link rel="stylesheet" href="../../public/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../../public/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../../public/css/slick.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../../public/css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../../public/css/style.css">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
            box-sizing: border-box;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 600px;


        }
    </style>

</head>
<body>
<?php
include_once ('../view/header.php');
?>
<!-- Header part end-->
<div id="map"></div>
<script>
    // Note: This example requires that you consent to location sharing when
    // prompted by your browser. If you see the error "The Geolocation service
    // failed.", it means you probably did not give permission for the browser to
    // locate you.
    var map, infoWindow;
    function initMap() {

        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 22.37357, lng: 91.821329},
            zoom: 15,

        });




        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var marker = new google.maps.Marker({position: pos});

                marker.setMap(map);

                // infoWindow.setPosition(pos);
                // infoWindow.setContent('Location found.');
                // infoWindow.open(map);
                // map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }


    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFhRk8cVNeEpJKjCK2LJ3t6DdTrBcUXEo&callback=initMap">
</script>

<?php
include_once ('../view/footer.php');
?>
<?php
include_once ('../view/script.php');
?>
