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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
   <link rel="stylesheet" href="../../Public/CSS/footer.css">
   <link rel="stylesheet" href="../../Public/CSS/navbar.css">
   <link rel="stylesheet" href="../../Public/CSS/infodetails.css">

  <title>Personal Information</title>

  <style>
         #home::before{
    
    width: 0%;
   
 }  #book::before{
    width: 100%;
 }
 .error{
  color: rgb(149, 5, 5);
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
       <h1>Payment Information</h1>
  </div>
     

   


<!-- form -->
<div class="contactForm">
                    <!-- <h2>Send us a message</h2> -->
                    <form  id="contactForm">

                        <div class="inputBox">
                            <input type="text" name="name"  id="name" required>
                            <span>Name</span>
                            <p class='error' id='nameerror'></p>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="email" id="email" required>
                            <span>Email</span>
                            <p class='error' id='emailerror' ></p>
                        </div>

                        <div class="inputBox">

                            <input type="text" name="phone" id="phone" required>


                            <span>Phone</span>
                            <p class='error' id='phoneerror'></p>
                        </div>

              
                        <div class="inputBox">
                            <textarea  name="req" id="req" placeholder="write your comment if you have"></textarea>
                            <span>Comment</span>
                            
                        </div>
                        <div id="error"> </div>

                        <label class="container1">
                          <input type="checkbox" id='cash'>
                          pay to captain
                          <span class="checkmark"></span>
                        </label>
                        <label class="container1">
                          <input type="checkbox" id="fawry">
                          fawry
                          <span class="checkmark"></span>
                        </label>
                        <p class='error' id='paymenterror'></p>
                        <div class="inputBox">
                            <input type="submit" value="SEND">
                        </div>
                        
                    </form>
                    <script src="../../Public/js/paymentvalidation1.js"></script>
                </div>
<!-- end of form -->
  
  <div class="pagination">
      <ul>
         <li class="numb done">1</li>
         <li class="numb done">2</li>
         <li class="numb active">3</li>
      </ul>
  </div>
 
  
   <?php
            include('../Partials/footer.php');
    ?>
  
  </body>