<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Collection</title>
  <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
  <link rel="stylesheet" href="../../Public/CSS/ourCars.css">
  <link rel="stylesheet" href="../../Public/CSS/footer2.css">
  
</head>
<body>
  
<?php
            include('../Partials/navbar2.php');
        ?>

  <section class="car-collection">
    <h1>choose your car</h1>
    <div class="car-listing">
      <div class="car">
        <img src="../../public/Images/sedan.jpg" alt="Car 1">
        <h3>Sedan</h3>
        <h4 class="Price">8000$</h4>
        <h5 class="info">Cras can hold up to 2 bags</h5>
        <a href="booking.html">Book Now</a>
      </div>
      <div class="car">
        <img src="../../public/Images/R35.jpg" alt="Car 2">
        <h3>SUV</h3>
        <h4 class="Price">8000$</h4>
        <h5 class="info">Cras can hold up to 4 bags</h5>
        <a href="booking.html">Book Now</a>
      </div>
      <div class="car">
        <img src="../../public/Images/AM.jpg" alt="Car 3">
        <h3>Van</h3>
        <h4 class="Price">8000$</h4>
        <h5 class="info">Cras can hold up to 6 bags</h5>
        <a href="booking.html">Book Now</a>
      </div>
    </div>
  </section>

  <?php
            include('../Partials/footer2.php');
        ?>
</body>
</html>