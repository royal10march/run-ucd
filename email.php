<?php

$email = $_POST['email'];
$file = fopen("emails.txt", "a");
fwrite($file, $email. "\n");
fclose($file);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>UCD Running Club</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/b4941cbe2f.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" async="async"></script>
</head>

<body>

    <script>
        function initMap() {
            var uluru = {
                lat: 53.308008,
                lng: -6.229326
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
        $(document).ready(function() {

            window.sr = ScrollReveal();
            sr.reveal('.group-info', {
                duration: 2000
            }, 50);
        });
    </script>

    <header class="top-navbar">
        <div class="container">
            <h1>
                <a href="index.html"> UCD RUNNING CLUB</a>
            </h1>
            <nav role="navigation">
                <ul class="dropdown-menu">
                    <li id="menu">☰</li>
                </ul>
                <ul class="link-ul">
                    <li class="link">
                        <a href="group.html">Group Activities</a>
                    </li>
                </ul>
                <ul class="link-ul">
                    <li class="link">
                        <a href="ras.html">Rás UCD</a>
                    </li>
                </ul>
                <ul class="link-ul">
                    <li class="link">
                        <a href="about.html">About US</a>
                    </li>
                </ul>
                <ul class="link-ul">
                    <li class="link">
                        <a href="mailto:runningclub@ucd.ie">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="email-thanks">
        <div class="container">
            <h4> Thank you! You have been added to the mail list. Please do check your spam folder as well. </h4>
         </div>
        </div>


    <div class="about-us-social">
        <div class="container">
            <div class="social-button">
                <a href="#"><i class="fa clickable fa-facebook-square" style="color:rgb(28, 55, 128)" aria-hidden="true"></i></a>
                <a href="#"><i class="fa clickable fa-twitter-square" style="color:rgb(3, 54, 128);" aria-hidden="true"></i></a>
                <a href="#"><i class="fa clickable fa-google-plus-square" style="color: rgb(255, 27, 18);" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <script async defer src="//maps.googleapis.com/maps/api/js?key=AIzaSyA610UIlrDmcoi2DIWtzaoRrjuTApycuEU&callback=initMap">
    </script>
    <script src="script.js"></script>
    <script src="//unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</body>

</html>