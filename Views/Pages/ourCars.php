<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Collection</title>
  <link rel="stylesheet" href="../../Public/CSS/ourCars.css">
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.js"></script>
   <!-- end -->
   <link rel="stylesheet" href="../../Public/CSS/footer2.css">
   <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
   
  
</head>
<body>
  
<?php
            include('../Partials/navbar2.php');
        ?>
          <section>
    <div class="bodyimage">
          <img src="../../Public/Images/carr.jpg" alt="">
    </div>
  </section>

  <section class="car-collection">
    <h1>choose your car</h1>
    <div class="car-listing">
      <div class="car">
        <img src="../../public/Images/sedan.jpg" alt="Car 1">
        <h3>Sedan</h3>
        <div class="info">
           <span class="material-symbols-outlined"> 
             groups_2
           </span>
           <span class="material-symbols-outlined">
              counter_3
            </span>
            <span class="material-symbols-outlined">
               work
            </span>
            <span class="material-symbols-outlined">
              counter_4
            </span>
        </div>
        <a href="booking.html">Book Now</a>
      </div>
      <div class="car">
        <img src="../../public/Images/pajero.jpg" alt="Car 2">
        <h3>SUV</h3>
        <div class="info">
           <span class="material-symbols-outlined"> 
             groups_2
           </span>
           <span class="material-symbols-outlined">
              counter_5
            </span>
            <span class="material-symbols-outlined">
               work
            </span>
            <span class="material-symbols-outlined">
              counter_4
            </span>
        </div>
        <a href="booking.html">Book Now</a>
      </div>
      <div class="car">
        <img src="../../public/Images/van.png" alt="Car 3">
        <h3>Hiace</h3>
        <div class="info">
           <span class="material-symbols-outlined"> 
             groups_2
           </span>
           <span class="material-symbols-outlined">
              counter_10
            </span>
            <span class="material-symbols-outlined">
               work
            </span>
            <span class="material-symbols-outlined">
              counter_7
            </span>
        </div>
        <a href="booking.html">Book Now</a>
      </div>
    </div>
  </section>

  <?php
            include('../Partials/footer2.php');
        ?>
</body>
</html>