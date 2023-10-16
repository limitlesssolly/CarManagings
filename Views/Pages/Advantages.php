<!DOCTYPE html>
<html lang="en">

<head>

    
    <title>Our Advantages </title>
    <link rel="stylesheet" href="../../Public/CSS/style.css">

</head>

<body>
<?php
       include('../../Views/Partials/sidebar.php');
    ?> 
    <center>


        <h1 style="margin-bottom: 50px;"><span> Our Advantages</span></h1>
        <div class="row">
            <div class="column">
                <div class="card">
                    <i>
                        <div class="clock"></div>
                    </i>
                    <h3>Everywhere around the clock</h3>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <i>
                        <div class="car-road" style="margin-top: 100px;margin-left:35% ;margin-bottom:25%">
                            <div class="car">
                                <div class="car-top">
                                    <div class="window">
                                    </div>
                                </div>
                                <div class="car-base">
                                </div>
                                <div class="wheel-left wheel">
                                    <div class="wheel-spike">
                                    </div>
                                    <div class="wheel-center">
                                    </div>
                                </div>
                                <div class="wheel-right wheel">
                                    <div class="wheel-spike">
                                    </div>
                                    <div class="wheel-center">
                                    </div>
                                </div>
                                <div class="head-light"></div>
                            </div>
                            <div class="road">
                            </div>
                        </div>


                    </i>
                    <h3>Fastest limousine services booking</h3>
                </div>

            </div>
            <div class="column">
                <div class="card">
                    <i>
                        <div id="div1" class="fa" style="margin-top: 100px;margin-left:0% ;margin-bottom:90px"></div>
                    </i>
                    <h3>Speed of arriving</h3>
                </div>
            </div>

        </div>
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
        setInterval(hourglass, 3000);
    </script>
</body>

</html>