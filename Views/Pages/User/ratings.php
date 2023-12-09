<?php
require_once("../../../App/Models/users.php");
require_once("../../../App/Controllers/UserControllers.php");
require_once("../../../Views/View.php");
$model = new User();
$controller = new UsersController($model);
session_start();
$id=$_SESSION["id"];
if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../Public/CSS/footer.css">
    <link rel="stylesheet" href="../../../Public/CSS/navbar.css">
    <link rel="stylesheet" href="../../../Public/CSS/ratings.css">
    <link rel="stylesheet" href="../../../Public/CSS/swiper-bundle.min.css">
    <link rel="stylesheet" href="../../../Public/CSS/cardstyle.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <title>Our-Ratings</title>
</head>

<body>

    <?php
    include('../../Partials/navbar.php');
    ?>

    <div class="bodyimage">
        <img src="../../../Public/Images/orangecar2.jpg" alt="">
    </div>

    <div class="container">

        <h1>Rate Your Experience</h1>

        <form method="POST" action="ratings.php">
            <div class="user-info">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1"></label>
            </div>

            <div class="review">
                <label for="review">Your Review:</label>
                <textarea id="review" name="review" rows="4" required></textarea>
            </div>

            <div class="submit-button">
                <button type="submit" name="submit">Submit Rating</button>
            </div>
        </form>

    </div>
    <div class="slide-container swiper">

        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <?php
                $i = 0;
                while(isset($_SESSION['AllRatings'][$i]['ID'])) {
                    echo '<div class="card swiper-slide">';
                    echo '<div class="image-content">';
                    echo '<span class="overlay"></span>';
                    echo '<div class="card-image"></div>';
                    echo '</div>';

                    echo '<div class="card-content">';
                    echo '<h2 class="name">'.$_SESSION['AllRatings'][$i]['name'].'</h2>';
                    echo '<p class="description">'.$_SESSION['AllRatings'][$i]['review'].'</p>';
                    echo '<button class="button">View More</button>';
                    echo '</div>';
                    echo '</div>';

                    $i++;
                }
                ?>

            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

    <script src="../../../Public/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="../../../Public/js/cardscript.js"></script>

    <?php
    include('../../Partials/footer.php');
    ?>


</body>

</html>