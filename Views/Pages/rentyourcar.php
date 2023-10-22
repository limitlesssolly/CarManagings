<?php
include_once "../../includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
    <link rel="stylesheet" href="../../Public/CSS/rentyourcar.css">
    <link rel="stylesheet" href="../../Public/CSS/footer2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../../Public/Images/logodowns.png" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <title>Rent Your Car</title>
</head>

<body>
    <?php
    include('../Partials/navbar2.php');
    ?>
    <div class="bodyimage">
        <img src="../../Public/Images/carlos.jpg " alt="">
    </div>
    <div class="container">
        <div class="title">
            <h1>Rent Your Car</h1>
        </div>

        <form action="" method="" class="formal">

            <div class="info">
                <input type="text" name="fullname">
                <div class="labella">Full Name</div>
            </div>

            <div class="info">
                <input type="text" name="contactnumbers">
                <div class="labella">Contact Number</div>
            </div>

            <div class="info">
                <input type="text" name="homeaddress">
                <div class="labella">Home Address</div>
            </div>

            <div class="info">
                <input type="text" name="cartype">
                <div class="labella">Car Type</div>
            </div>

            <div class="info">
                <input type="text" name="carmodel">
                <div class="labella">Car Model</div>
            </div>

            <div class="info">
                <input type="text" name="mileage">
                <div class="labella">Mileage</div>
            </div>

            <div class="info">
                <input type="text" name="expectedmonthlyrent">
                <div class="labella">Expected Monthly Rent</div>
            </div>
            <button type="submit" name="submit" class="subs">submit</button>
        </form>
    </div>
    <?php
    include('../Partials/footer2.php');
    ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = htmlspecialchars($_POST["fullname"]);
        $contactnumbers = htmlspecialchars($_POST["contactnumbers"]);
        $homeaddress = htmlspecialchars($_POST["homeaddress"]);
        $cartype = htmlspecialchars($_POST["cartype"]);
        $carmodel = htmlspecialchars($_POST["carmodel"]);
        $mileage = htmlspecialchars($_POST["mileage"]);
        $expectedmonthlyrent = htmlspecialchars($_POST["expectedmonthlyrent"]);

        $sql = "insert into cars4rent(fullname,number,address,cartype,carmodel, mileage, expectedrent) 
        values('$fullname','$contactnumbers','$homeaddress','$cartype','$carmodel','$mileage', '$expectedmonthlyrent')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<h1>Your request has been sent we'll contact you shortly!</h1>";
        }
    }
    ?>

</body>

</html>