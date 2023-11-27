<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- datepicker -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.css">
  <!-- end -->

  <link rel="stylesheet" href="../../../Public/CSS/footer2.css">
  <link rel="stylesheet" href="../../../Public/CSS/navbar2.css">
  <link rel="stylesheet" href="../../../Public/CSS/chooseyourcar.css">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <title>choose your car</title>

<body>

  <?php
  // include('../../Partials/navbar.php');
  ?>

  <section>
    <div class="bodyimage">
      <img src="../../../Public/Images/carr.jpg" alt="">
    </div>
  </section>

  <div class="bodytext">
    <h1>Choose Your Car</h1>
  </div>

  <div class="container1">

    <div class="box">

      <img src="../../../Public/Images/sedan.png" alt="">

      <div class="innerbox">
        <p id="sedan">Sedan Car</p>

        <form action="/ordercar/info" method="POST">
          <button id="select">Select</button>
        </form>

        <p id="price">2500EG</p>

        <div>

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
      </div>

    </div>

    <div class="box">

      <img src="../../../Public/Images/suv.png" alt="">

      <div class="innerbox">

        <p id="sedan">Suv Car</p>

        <form action="/ordercar/info" method="POST">
          <button id="select">Select</button>
        </form>

        <p id="price">2500EG</p>

        <div>
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

      </div>
    </div>

    <!-- 3 -->
    <div class="box">

      <img src="../../../Public/Images/his.png" alt="">

      <div class="innerbox">

        <p id="sedan">Hai S</p>

        <form action="/ordercar/info" method="POST">
          <button id="select">Select</button>
        </form>

        <p id="price">2500EG</p>

        <div>
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

      </div>
    </div>

  </div>

  <div class="table">

    <h3>Summmary</h3>

    <div class="box" id="service">
      <p class="head">Service type</p>
      <p class="child">distance</p>
    </div>

    <div class="box" id="fromto">
      <p class="head">From-To</p>
      <p class="child">Mokattam, Al Abageyah, El Mokattam, Egypt - Alexandria, Egypt</p>
    </div>

    <div class="box" id="datetime">
      <p class="head">PICKUP DATE, TIME</p>
      <p class="child">27-10-2023, 6:00</p>
    </div>

    <div class="box " id="flexbox">

      <div class="box2">
        <p class="head">Distance</p>
        <p class="child" id="block1">270km</p>
      </div>

      <div class="box2">
        <p class="head">Time</p>
        <p class="child" id="block2">3h 52m</p>
      </div>

    </div>

  </div>

  <div class="pagination">
    <ul>
      <li class="numb done">1</li>
      <li class="numb active">2</li>
      <li class="numb">3</li>
      <li class="numb">4</li>
    </ul>
  </div>

  <?php
  // include('../../Partials/footer.php');
  ?>

</body>

</html>