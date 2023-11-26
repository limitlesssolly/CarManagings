<link rel="stylesheet" href="../../Public/CSS/navbar.css">
<header class="header">

    <a href="/home" class="logo">24Sevenlimousine</a>

    <input type="checkbox" id="check">

    <label for="check" class="icons">

        <span class="material-symbols-outlined" id="menu-icon">menu</span>
        <span class="material-symbols-outlined" id="close-icon">close</span>

    </label>

    <nav class="navbar">

        <a href="/home" id="home">Home</a>
        <a href="/ordercar" id="book">Book your ride</a>
        <a href="/rentcar" id="rent"> Rent your car</a>
        <a href="/about" id="about">About Us</a>
        <a href="/rate" id="ratings">Rate Us</a>
        <a href="/contactus" id="contactus">Contact Us</a>
        <a href="/profile" id="fb"> <i class='fa fa-user-circle' style="font-size:22px"></i></a>

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