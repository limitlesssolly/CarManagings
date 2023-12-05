<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- datepicker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.js"></script>
   <!-- end -->
   <link rel="stylesheet" href="../../Public/CSS/footer.css">
   <link rel="stylesheet" href="../../Public/CSS/navbar.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
   
   <link rel="stylesheet" href="../../Public/CSS/chooseyourcar.css">

  <title>check-out</title>

<style>
  .bodytext{
    background-color: rgb(58, 131, 94)
  }
  .table{
    width: 510px;
    margin-left: 505px;
  }
  #home::before{
    width: 0%;
 }
</style>

<body>

     <?php
            include('../Partials/navbar.php');
     ?>

  <section>
    <div class="bodyimage">
          <img src="../../Public/Images/carr.jpg" alt="">
    </div>
  </section>
  <div class="bodytext">
       <h1>Successful! </h1>
  </div>
 
  <div class="table">
    <h3>Summmary</h3>
    <div class="box" id="service">
     <p class="head">Car type</p>
    <p class="child"><?php session_start(); echo $_SESSION['ride']['cartype'] ?> </p>
    </div>
    <div class="box" id="fromto">
     <p class="head">From-To</p>
    <p class="child"><?php  echo $_SESSION['ride']['start'] ?> -  <?php echo $_SESSION['ride']['end'] ?>  </p>
    </div>
    <div class="box" id="datetime">
     <p class="head">PICKUP DATE, TIME</p>
    <p class="child"><?php echo $_SESSION['ride']['date'] ?>, <?php echo $_SESSION['ride']['time'] ?></p>
    </div>
    <div class="box " id="flexbox">
       <div class="box2">
           <p class="head">Distance</p>
           <p class="child" id="block1"><?php echo $_SESSION['ride']['distance'] ?></p>
       </div>
      
        
       <div class="box2">
        <p class="head">Payment Method</p>
        <p class="child" id="block2"><?php echo $_SESSION['ride']['payment'] ?></p>
       </div> 
        
    </div>


  </div>
     
 
 
  <?php
            include('../Partials/footer.php');
     ?>

  </body>
</html>