<?php
include_once "../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../../Public/Images/logodowns.png" />
    <link rel="stylesheet" href="../../Public/CSS/RentYourCar.css">
    <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
    <link rel="stylesheet" href="../../Public/CSS/footer2.css">
    <title>Rent Your Car</title>
</head>

<body>

    <div class="title">Rent Your Car</div>
    <div class="image">
        <img src="../../Public/Images/carla.png" class="carimg" alt="carla">
    </div>
    <div class="container">

        <form action="" method="">

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

            <div class="subs">
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>


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
            // print("el donia lessa bkheer");
        }
    }
    ?>
</body>

</html>