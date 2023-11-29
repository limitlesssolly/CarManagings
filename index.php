<?php

// define('__ROOT__', "../App/");
// require_once(__ROOT__ . "model/Users.php");
// require_once(__ROOT__ . "controller/UsersController.php");
// require_once(__ROOT__ . "view/ViewUser.php");

// $model = new Users();
// $controller = new UsersController($model);
// $view = new ViewUser($controller, $model);

// if (isset($_GET['action']) && !empty($_GET['action'])) {
// 	$controller->{$_GET['action']}();
// }

// if(isset($_POST['login']))	{
// 	$name=$_REQUEST["name"];
// 	$password=$_REQUEST["password"];
// 	$sql = "SELECT * FROM user where Name='$name' and password='$password'";
// 	$dbh = new Dbh();
// 	$result = $dbh->query($sql);
// 	if ($result->num_rows == 1){
// 		$row = $dbh->fetchRow();
// 		$_SESSION["ID"]=$row["ID"];
// 		$_SESSION["Name"]=$row["Name"];
// 		header("Location:profile.php");
// 	}
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="Public/CSS/index.css">
  <link rel="stylesheet" href="Public/CSS/navbar.css">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <title>Home</title>

</head>


<body>

  <?php
    include "Views/Partials/navbar.php";
  ?>

  <div class="bodyimage">
    <img src="Public/Images/carbackground.jpg " alt="">
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
      <img src="Public/Images/elantra.jpg" alt="">
      <div class="info">
        <h1>Sedan</h1>
        <p>capacity 4 persons-3 bags</p>
        <a href="/ordercar" class="btn">Book Now</a>
      </div>
    </div>

    <div class="card">
      <img src="Public/Images/tuscon.jpg" alt="">
      <div class="info">
        <h1>SUV</h1>
        <p>capacity 5 persons-4 bags</p>
        <a href="/ordercar" class="btn">Book Now</a>
      </div>
    </div>

    <div class="card">
      <img src="Public/Images/hiace.png" alt="">
      <div class="info">
        <h1>Hiace</h1>
        <p>capacity 10 persons-7 bags</p>
        <a href="/ordercar" class="btn">Book Now</a>
      </div>
    </div>
    
</div>

  <div class="feat bg-gray pt-5 pb-5">
    <div class="container">
      <div class="row">

        <div class="section-head col-sm-12">
          <h4><span>Why Choose</span> Us?</h4>
          <p>Choose 24sevenlimousine for unmatched speed and round-the-clock availability. Our dedicated team ensures
            the fastest service possible, getting you to your destination in record time. With our commitment to
            efficiency and convenience, we're available 24/7 to assist you on your journey. Trust us to prioritize your
            time and provide a seamless and expedited experience. Join our satisfied customers and experience efficient
            and convenient travel with 24sevenlimousine.</p>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
            <h6>Modern Design</h6>
            <p>We use latest technology for the latest world because we know the demand of people.</p>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
            <h6>Creative Design</h6>
            <p>We are always creative and always listen to our customers and we mix these two things to offer best
              service.</p>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
            <h6>24 x 7 User Support</h6>
            <p>If our customer has any problem and any query we are always happy to help them.</p>
          </div>
        </div>

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

    <div class="popup">
      <span class="close">&times;</span>
      <h2>Contact Us</h2>
      <div class="icons">
        <a href="https://api.whatsapp.com/send?phone=1234567890" target="_blank" id=whatsapp>
          <i class="fa fa-whatsapp"></i>
        </a>
        <a href="tel:1234567890">
          <i class="fa fa-phone" id="phone"></i>
        </a>
      </div>
    </div>

  <div>

</div>

<button id="messageButton"><i class="fa fa-comment"></i></button>
<?php
  include "Views/Partials/footer.php";
?>


<script>
    // Open the popup when the button is clicked
    document.getElementById("messageButton").addEventListener("click", function () {
      document.querySelector(".popup").style.display = "block";
    });

    // Close the popup when the close button is clicked
    document.querySelector(".popup .close").addEventListener("click", function () {
      document.querySelector(".popup").style.display = "none";
    });

    // Close the popup when clicking outside the popup
    window.addEventListener("click", function (event) {
      if (event.target.classList.contains("popup")) {
        document.querySelector(".popup").style.display = "none";
      }
    });
</script>

</body>

</html>