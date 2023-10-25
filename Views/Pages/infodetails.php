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
   <link rel="stylesheet" href="../../Public/CSS/footer2.css">
   <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
   <link rel="stylesheet" href="../../Public/CSS/infodetails.css">

  <title>Personal Information</title>

  <style>
         #home::before{
    
    width: 0%;
   
 }  #book::before{
    width: 100%;
 }
    </style>

<body>


   <?php
            include('../Partials/navbar2.php');
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
                        </div>

                        <div class="inputBox">
                            <input type="text" name="email" id="email" required>
                            <span>Email</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="phone" id="phone" required>
                            <span>Phone</span>
                        </div>

              
                        <div class="inputBox">
                            <textarea  name="req" id="req" required></textarea>
                            <span>Comment</span>
                        </div>
                        <div id="error"> </div>

                        <label class="container1">
                          <input type="checkbox">
                          pay to captain
                          <span class="checkmark"></span>
                        </label>
                        <label class="container1">
                          <input type="checkbox" id="fawry">
                          fawry
                          <span class="checkmark"></span>
                        </label>

                        <div class="inputBox">
                            <input type="submit" value="SEND">
                        </div>
                        
                    </form>
                    <script src="js/contactus.js"></script>
                </div>
<!-- end of form -->
  
  <div class="pagination">
      <ul>
         <li class="numb done">1</li>
         <li class="numb done">2</li>
         <li class="numb active">3</li>
         <li class="numb">4</li>
      </ul>
  </div>
 
  
   <?php
            include('../Partials/footer2.php');
    ?>
  
  </body>
</html>