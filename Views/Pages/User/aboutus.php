<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../Public/CSS/navbar.css">
    <link rel="stylesheet" href="../../../Public/CSS/footer.css">
    <link rel="stylesheet" href="../../../Public/CSS/aboutus2.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <title>About-us</title>
</head>

<body>

<?php
    include "../../Partials/navbar.php";
  ?>

    <div class="bodyimage">
        <img src="../../../Public/Images/orangecar1.jpg" alt="">
    </div>

    <center>
        <section class="about-us">
            <div class="about">

                <div class="hero-image">
                    <img style="float: right; margin: 0px 0px 15px 15px;" src="../../../Public/Images/blackcar.jpg"
                        class="pic">
                </div>

                <div class="text">
                    <div class="body2">

                        <h5><span class="spann">Our Mission</span></h5>
                        <h3>We guarantee you a comfortable travel experience
                            Enjoyable with professional drivers</h3>
                        <p>Do you want to enjoy all the benefits and luxury of a limousine, and travel in elegant and
                            distinctive style?
                            We guarantee you a comfortable and enjoyable travel experience with professional drivers and
                            modern and luxurious vehicles

                            We also provide customer service 24 hours a day, 7 days a week to ensure your comfort and
                            the comfort of our customers

                            24 Seven Limousine availability

                            All types of luxury cars that suit all numbers of people to enjoy a quiet, safe and
                            comfortable trip

                            We guarantee that we have a vehicle to suit all your needs</p>

                        <div class="data">
                            <a href="/ordercar" class="hire">BOOK NOW</a>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </center>

    <script>
        function hourglass() {
            var a;
            a = document.getElementById("div1");
            a.innerHTML = "&#xf251;";
            setTimeout(function () {
                a.innerHTML = "&#xf252;";
            }, 1000);
            setTimeout(function () {
                a.innerHTML = "&#xf253;";
            }, 2000);
        }
        hourglass();
        setInterval(hourglass, 30000);
    </script>

    <!-- our advantages -->
    <h1 id="ouradvantages">OUR ADVANTAGES</h1>
    <div class="big">

        <div class="container">

            <div class="box">
                <h2>01</h2>
                <h3>Timing</h3>
                <p>
                    Every where Around the Clock and always on time
                </p>
            </div>

            <div class="box">
                <h2>02</h2>
                <h3>Service One</h3>
                <p>
                    Fastes limousine services booking
                </p>
            </div>

            <div class="box">
                <h2>03</h2>
                <h3>Safety and Speedness</h3>
                <p>
                    Keep your information in safe and safe driving
                </p>
            </div>

        </div>

    </div>

    <?php
        include "../../Partials/footer.php";
    ?>

</body>

</html>