<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sign Up</title>
      <link rel="stylesheet" href="../../Public/CSS/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="icon" href="../../Public/Images/logodowns.png" type="image/gif">
      <style>
   .bg-img {
    background: url("../../Public/Images/hands-wheel-when-driving-high-speed-from-inside-car.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
}

.bg-img:after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
}

   </style>
   </head>
   <body>
      <div class="bg-img">
         <div class="content">
            <header>Sign Up</header>
            <form action="#">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" required placeholder="Name">
               </div>
               <div class="field space">
                <span class="fa fa-envelope"></span>
                <input type="email" required placeholder="Email">
             </div>
             <div class="field space">
                <span class="fa fa-phone"></span>
                <input type="email" required placeholder="Phone">
             </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <div class="field2">
               </div>
               <div class="field">
                  <input type="submit" value="Sign Up">
               </div>
           
            <div class="login">
               Already have account?
               <a href="../../Views/Pages/login.php">Login</a>
            </div>
         </div>
      </div>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>
   </body>
</html>