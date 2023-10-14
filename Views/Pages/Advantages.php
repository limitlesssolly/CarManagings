<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Advantages </title>
    <link rel="stylesheet" href="style.css">

</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
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