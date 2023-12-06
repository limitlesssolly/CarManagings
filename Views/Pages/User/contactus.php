<?php
session_start();
require_once "../../../App/Models/users.php";
require_once "../../../App/Controllers/UserControllers.php";
$model = new User($id, $name, $email, $phone);
$controller = new UsersController($model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Contact-us</title>

  <link rel="stylesheet" href="../../../Public/CSS/navbar.css" />
  <link rel="stylesheet" href="../../../Public/CSS/contactus.css" />
  <link rel="stylesheet" href="../../../Public/CSS/footer.css" />

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include('../../Partials/navbar.php');
  ?>

  <div class="container">

    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />

    <div class="form">

      <div class="contact-info">

        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          dolorum adipisci recusandae praesentium dicta!
        </p>

        <div class="info">

          <div class="information">
            <img src="../../../Public/Images/loc.png" class="icon" alt="" id="loc" />
            <p>92 Cherry Drive Uniondale, NY 11553</p>
          </div>

          <div class="information">
            <img src="../../../Public/Images/email.png" class="icon" alt="" />
            <p>lorem@ipsum.com</p>
          </div>

          <div class="information">
            <img src="../../../Public/Images/call.png" class="icon" alt="" />
            <p>123-456-789</p>
          </div>

        </div>

        <div class="social-media">

          <p>Connect with us :</p>
          <div class="social-icons">

            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>

            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>

            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>

          </div>

        </div>

      </div>

      <div class="contact-form">

        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="contactus.php?action=contact" autocomplete="off" method="POSt">

          <h3 class="title">Contact us</h3>

          <div class="input-container">
            <input type="text" name="name" class="input" required />
            <label for="">Username</label>
            <span>Username</span>
          </div>

          <div class="input-container">
            <input type="email" name="email" class="input" required />
            <label for="">Email</label>
            <span>Email</span>
          </div>

          <div class="input-container">
            <input type="tel" name="phone" class="input" required />
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          
          <div class="input-container textarea">
            <textarea name="message" class="input" required></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>

          <input type="submit" value="Send" class="btn" name="submit"/>

        </form>

      </div>

    </div>

  </div>

  <script src="../../../Public/js/contactus.js"></script>

  <?php
  include('../../Partials/footer.php'); 
  ?>

</body>

</html>