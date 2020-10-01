<?php
session_start();
// Include the database configuration file
require_once ('../../elements/connection/map_config.php');

// Fetch the marker info from the database
$result = $db->query("SELECT * FROM `mechanic_shop` WHERE `usertype` = 'garage_owner'");

// Fetch the info-window data from the database
$result2 = $db->query("SELECT * FROM `mechanic_shop` WHERE `usertype` = 'garage_owner'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vehicle Service</title>
    <link rel="icon" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="public/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFhRk8cVNeEpJKjCK2LJ3t6DdTrBcUXEo"></script>

    <script>
        function initMap() {
            var infoWindow;
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the web page
            map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
            map.setTilt(50);

            // Multiple markers location, latitude, and longitude
            var markers = [
                <?php if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '["'.$row['garage_name'].'", '.$row['lat'].', '.$row['lng'].'],';
                }
            }
                ?>
            ];

            // Info window content
            var infoWindowContent = [
                <?php if($result2->num_rows > 0){
                while($row = $result2->fetch_assoc()){ ?>
                ['<div class="info_content">' +
                '<h3><a href="garage.php?id=<?= $row['garage_id']; ?>"><?php echo $row['garage_name']; ?></a></h3>' +
                '<p><?php echo $row['street_address']; ?></p>' + '</div>'],
                <?php }
                }
                ?>
            ];

            infoWindow = new google.maps.InfoWindow;

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var marker = new google.maps.Marker({position: pos});

                    marker.setMap(map);

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }

            // Add multiple markers to map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Place each marker on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Add info window to marker
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Center the map to fit all markers on the screen
                map.fitBounds(bounds);
            }

            // Set zoom level
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(14);
                google.maps.event.removeListener(boundsListener);
            });

        }

        // Load initialize function
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>

    <style>
        #mapCanvas {
            width: 100%;
            height: 650px;
        }
    </style>
</head>
<body>

<!--::header part start::-->
<?php
include_once ('../view/header.php');
?>
<!-- Header part end-->

<div id="mapCanvas"></div>

<?php
include_once ('../view/footer.php');
?>
<?php
include_once ('../view/script.php');
?>