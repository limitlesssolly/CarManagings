<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ratings</title>
        <link rel="stylesheet" href="../../../Public/CSS/ratingdash.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
    <?php
    include("../../Partials/dashboardsidebar.php");
    ?>
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Dashboard</span>
    </div>
    <div class="main-container">
        <div class="heading">
        </div>
        <div class="cards">
            <?php
            if (is_array($ratings) && !empty($ratings)) {
            foreach ($ratings as $rating) {
                ?>
                <div class="card card-1">
                    <div class="card__icon">
                        <p>From: <?php echo $rating['Name']; ?></p>
                    </div>
                    <p class="card__exit"><i class="fas fa-times"></i></p>
                    <h2 class="card__title"><?php echo $rating['Rate']; ?></h2>
                </div>
                <?php
            }
        } else {
            echo "No ratings available.";
        }
            ?>
        </div>
    </div>
</section>
</body>
</html>