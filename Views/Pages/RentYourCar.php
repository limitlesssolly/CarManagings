<!-- <?php
include_once "includes/db.php";
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../Public/CSS/rentyourcar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Your Car</title>
</head>


<body>
    <div class="footsnnavs">
        <?php
        include('../Partials/navbar.php');
        ?>
        <?php
        include('../Partials/footer.php');
        ?>
    </div>
    <div class="title">Rent Your Car</div>
    <div class="image">
        <img src="../../Public/Images/carla.png" class="carimg" alt="carla">
    </div>
    <div class="components">

    
    <form action="" method="post">

        <div class="name">
            <label for="fullname">Full Name</label>
            <input type="text" class="field" name="fullname" placeholder="full name"> <br>
        </div>

        <div class="contactinfo">
            <label for="contactnumbers">Contact Number</label>
            <input type="text" class="field" name="contactnumbers" placeholder="contact numbers"> <br>

            <label for="homeaddress">Home Address</label>
            <input type="text" class="field" name="homeaddress" placeholder="home address"> <br>
        </div>

        <div class="carinfo">
            <label for="cartype">Car Type</label>
            <input type="text" class="field" name="cartype" placeholder="car type"> <br>

            <label for="carmodel">Car Model</label>
            <input type="text" class="field" name="carmodel" placeholder="car model"> <br>

            <label for="mileage">Mileage</label>
            <input type="text" class="field" name="mileage" placeholder="mileage"> <br>

            <label for="expectedmonthlyrent">Expected Monthly Rent</label>
            <input type="text" class="field" name="expectedmonthlyrent" placeholder="expected monthly rent"> <br>

            <label for="insured">Insured</label>
            <input type="radio" name="insured" placeholder="yes">
            <input type="radio" name="notinsured" placeholder="no"> <br>

            <label for="havedriver">Have A Driver</label>
            <input type="radio" name="havedriver" placeholder="yes">
            <input type="radio" name="nothavedriver" placeholder="no"> <br>
        </div>

        <div class="subs">
            <input type="submit" name="submit">
        </div>
    </form>
    </div>
    <!-- <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = htmlspecialchars($_POST["fullname"]);
        $contactnumbers = htmlspecialchars($_POST["contactnumbers"]);
        $homeaddress = htmlspecialchars($_POST["homeaddress"]);
        $cartype = htmlspecialchars($_POST["cartype"]);
        $mileage = htmlspecialchars($_POST["mileage"]);
        $expectedmonthlyrent = htmlspecialchars($_POST["expectedmonthlyrent"]);

        $sql = "insert into cars4rent(FirstName,LastName,Email,Password,Hobby) 
	values('$fullname','$contactnumbers','$homeaddress','$cartype','$mileage', 'expectedmonthlyrent')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            print("woohoo");
        }
    }
    ?> -->
</body>

</html>