<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sign Up</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="icon" href="images/fevicon.png" type="image/gif">

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
               <a href="../login.php">Login</a>
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