<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/rating.css">
    <title>Car Rental System Rating</title>
</head>
<body>
<?php
        include('../Partials/navbar.php');
        ?>
    <div class="container">
        <h1>Rate Your Car Rental Experience</h1>
        <form>
            <div class="user-info">
                <label for="name">Name:</label>
                 <input type="text" id="name" name="name" required>  <!--validation --> 
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
                <button type="submit">Submit Rating</button>
            </div>
        </form>
    </div>
    
</body>
</html>
