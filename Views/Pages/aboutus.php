<!DOCTYPE html>
<html lang="en">
<head>
    <title> About Us </title>
    <link rel="stylesheet" href="../../Public/CSS/style.css">
    
</head>  

<body>
    
 <?php
       include('../../Views/Partials/sidebar.php');
    ?> 


<center>
    <section class="about-us">
        <div class="about">
               <div class="hero-image">
                <img style="float: right; margin: 0px 0px 15px 15px;" src="../../Public/Images/slider-21.jpg" class="pic" >
            </div>
            <div class="text">
                <div class="body2">
                    <h5 ><span>About Us</span></h5>
                    <h3>We guarantee you a comfortable travel experience
                        Enjoyable with professional drivers</h3>
                    <p>Do you want to enjoy all the benefits and luxury of a limousine, and travel in elegant and distinctive style?
                        We guarantee you a comfortable and enjoyable travel experience with professional drivers and modern and luxurious vehicles
                        
                        We also provide customer service 24 hours a day, 7 days a week to ensure your comfort and the comfort of our customers
                        
                        24 Seven Limousine availability
                        
                        All types of luxury cars that suit all numbers of people to enjoy a quiet, safe and comfortable trip
                        
                        We guarantee that we have a vehicle to suit all your needs</p>
                    <div class="data">
                        <a href="#" class="hire">Book now
                        </a>
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
        setInterval(hourglass,3000);
        </script>
</body>

</html>