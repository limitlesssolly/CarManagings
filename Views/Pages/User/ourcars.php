<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Collection</title>
  <link rel="stylesheet" href="../../../Public/CSS/ourCars.css">
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- end -->
  <link rel="stylesheet" href="../../../Public/CSS/footer.css">
  <link rel="stylesheet" href="../../../Public/CSS/navbar.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <style>
    #home::before {

      width: 0%;

    }

    #book::before {
      width: 100%;
    }

    .bodyimage img {
      position: relative;
      margin-top: -140px;
      width: 100%;
      height: auto;
    }

    .bodytext {

      margin-top: -10px;
      text-align: center;
      background-color: #010d3468;
      /* background-color: #24262b; */
    }

    .bodytext h1 {
      font-size: 30px;
      font-weight: 400;
      color: #fff;
    }
  </style>

</head>

<body>

  <?php
  include('../../Partials/navbar.php');
  ?>
  <section>
    <div class="bodyimage">
      <img src="../../../Public/Images/carr.jpg" alt="">
    </div>
  </section>
  <div class="bodytext">
    <h1>Choose your car</h1>
  </div>

  <div class="car-listing">
    <div class="car">
      <img src="../../../public/Images/sedan.jpg" alt="Car 1">
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
      <a href="infodetails.php">Select</a>
    </div>
    <div class="car">
      <img src="../../../public/Images/pajero.jpg" alt="Car 2">
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
      <a href="infodetails.php">Select</a>
    </div>
    <div class="car">
      <img src="../../../public/Images/van.png" alt="Car 3">
      <h3>Hiace</h3>
      <div class="info">
        <span class="material-symbols-outlined">
          groups_2
        </span>
        <span class="material-symbols-outlined">
          counter_9
        </span>
        <span class="material-symbols-outlined">
          work
        </span>
        <span class="material-symbols-outlined">
          counter_7
        </span>
      </div>
      <a href="infodetails.php">Select</a>
    </div>
  </div>
  </section>

  <?php
  include('../../Partials/footer.php');
  ?>
</body>

</html>