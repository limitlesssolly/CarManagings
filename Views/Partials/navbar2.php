<header class="header">
    <a href="/" class="logo"><img src="../../Public/Images/logo.png" alt=""></a>
    
    <input type="checkbox" id="check">
    <label for="check" class="icons">
        <span class="material-symbols-outlined" id="menu-icon" >
            menu
            </span>
            <span class="material-symbols-outlined" id="close-icon">
                close
                </span>
    </label>
    <nav class="navbar">
        <a href="/../../Views/Pages/index.php" id="home">Home</a>
        <a href="../../Views/Pages/bookyourcar.php" id="aboutus">Book your ride</a>
        <a href="/ourservices" id="ourservices"> Rent your car</a>
        
        <a href="/ourclients" id="ourclients">About Us</a>
        <a href="../../Views/Pages/contactus.php" id="contactus">Contact Us</a>
        <a href=""  id="fb" target="_blank"> <i class='fa fa-user-circle' style="font-size:22px"></i> </a>
    </nav>
</header>

<script>
  
  jQuery(function($){

      var $navbar=$('.header');
      $(window).scroll(function(event){
          var $current=$(this).scrollTop();

          if($current >250){
              $navbar.addClass('navbar-color');
          }else{
              $navbar.removeClass('navbar-color');
          }

      });
  });

</script>