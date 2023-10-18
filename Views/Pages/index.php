<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/footer2.css">
    <link rel="stylesheet" href="../../Public/CSS/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>                      

   
    <title>Home</title>
</head>
<body>
    
        <?php
            include('../Partials/navbar2.php');
        ?>
        
        <div class="bodyimage">
            <img src="../../Public/Images/carbackground.jpg "alt="">
        </div>
        <section id="introo">
            <div class="intro">
            <p class="p1">24Seven limousine for best travelling</p>
            <p class="p2"> Established in 2020 By a Group of <br> Challengers from Different Fields</p>
            </div>
        </section>      
        
        
        <div class="container4">
            <p class="p1"> Our Cars</p>
       
        </div>    


        
         <div class="wrapper">
            <div class="card">
                <img src="../../Public/Images/elantra.jpg" alt="">
                <div class="info">
                    <h1>Sedan</h1>
                    <p>capacity 4 persons-3 bags</p>
                    <a href="" class="btn">Book Now</a>
                </div>
            </div>

            <div class="card">
                <img src="../../Public/Images/tuscon.jpg" alt="">
                <div class="info">
                    <h1>SUV</h1>
                    <p>capacity 5 persons-4 bags</p>
                    <a href="" class="btn">Book Now</a>
                </div>
            </div>

            <div class="card">
                <img src="../../Public/Images/hiace.png" alt="">
                <div class="info">
                    <h1>Hiace</h1>
                    <p>capacity 10 persons-7 bags</p>
                    <a href="" class="btn">Book Now</a>
                </div>
            </div>

         </div>
 
         <div class="container3">
               <div class="box2">
                    <img src="../../Public/Images/mitsubishilogo.png" alt="">
                </div>

                <div class="box2">
                    <img src="../../Public/Images/toyotalogo.png" alt="" id="toyota">
                </div>

                <div class="box2">
                    <img src="../../Public/Images/hyundai-logo.png" alt="">
                </div>
        </div>

        <?php
            include('../Partials/footer2.php');
        ?>


</body>
</html>