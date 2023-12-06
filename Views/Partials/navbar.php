<?php 
if (isset($_GET['action']) && !empty($_GET['action'])) {
	switch($_GET['action']){
		case 'home':
			header("Location:index.php");
			break;
		case 'order':
			header("Location:bookyourcar.php");
			break;
		case 'rent':
			header("Location:rentyourcar.php");
			break;
		case 'about':
			header("Location:aboutus.php");
			break;
		case 'rate':
			header("Location:Views/Pages/User/ratings.php");
			break;
		case 'contact':
			header("Location:Views/Pages/User/contactus.php");
			break;
		case 'profile':
			header("Location:Views/Pages/User/profile.php");
			break;
		case 'signups':
			header("Location:Views/Pages/User/signup.php");
			break;
		case 'admin':
			header("Location:Views/Pages/Admin/dashboard.php");
			break;
	}
}
?>
<!-- <link rel="stylesheet" href="../../Public/CSS/navbar.css"> -->
<header class="header">

    <a href="?action=admin" class="logo">24Sevenlimousine</a>

    <input type="checkbox" id="check">

    <label for="check" class="icons">

        <span class="material-symbols-outlined" id="menu-icon">menu</span>
        <span class="material-symbols-outlined" id="close-icon">close</span>

    </label>

    <nav class="navbar">

        <a href="?action=home" id="home">Home</a>
        <a href="?action=order" id="book">Book your ride</a>
        <a href="?action=rent" id="rent"> Rent your car</a>
        <a href="?action=about" id="about">About Us</a>
        <a href="?action=rate" id="ratings">Rate Us</a>
        <a href="?action=contact" id="contactus">Contact Us</a>
        <a href="?action=signups" id="fb"> <i class='fa fa-user-circle' style="font-size:22px"></i></a>

    </nav>

</header>

<script>

    jQuery(function ($) {

        var $navbar = $('.header');
        $(window).scroll(function (event) {
            var $current = $(this).scrollTop();

            if ($current > 250) {
                $navbar.addClass('navbar-color');
            } else {
                $navbar.removeClass('navbar-color');
            }

        });
    });

</script>