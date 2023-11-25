<header class="header">

    <a href="../Pages/index.php" class="logo">24Sevenlimousine</a>

    <input type="checkbox" id="check">
    <label for="check" class="icons">
        <span class="material-symbols-outlined" id="menu-icon">menu</span>
        <span class="material-symbols-outlined" id="close-icon">close</span>
    </label>
    <nav class="navbar">
        <a href="../../Pages/index.php" id="home">Home</a>
        <a href="../../Views/Pages/User/bookyourcar.php" id="book">Book your ride</a>
        <a href="../../Views/pages/User/rentyourcar.php" id="rent"> Rent your car</a>
        <a href="../../Views/Pages/User/aboutus.php" id="about">About Us</a>
        <a href="../../Pages/User/ratings.php" id="ratings">Ratings</a>
        <a href="../../Pages/User/contactus.php" id="contactus">Contact Us</a>
        <a href="../../Views/Pages/User/signup.php" id="fb"> <i class='fa fa-user-circle' style="font-size:22px"></i> </a>
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