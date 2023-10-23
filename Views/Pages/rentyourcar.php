<?php
include_once "../../includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
   <!-- <link rel="stylesheet" href="../../Public/CSS/rentyourcar.css">-->
    <link rel="stylesheet" href="../../Public/CSS/footer2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../../Public/Images/logodowns.png" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <title>Rent Your Car</title>
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    /* box-sizing: border-box; */
}

.bodyimage img {

    position: relative;
    margin-top: -50px;
    width: 100%;
    height: auto;
}

h1 {
    font-weight: bold;
    margin: 0;
    text-align: center;
    font-size: 3rem;
}

form {
    position: relative;
    left: 10%;
    top: 10%;
    width: 50%;
}

body {
    display: flex;
    min-height: 100vh;
    justify-content: center;
    background: white;
    align-items: center;
    flex-flow: row wrap;
    align-content: center;
}

.container {
    /* max-width: 400px; */
    margin-left: 37%;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 20px 40px;

    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    width: 700px;
    margin: 30px;
}

.formal {
    position: relative;
    left: 23%;
}

.info {
    position: relative;
    height: 50px;
    line-height: 50px;
    margin: 30px;
}

input[type=text] {
    position: relative;
    width: 100%;
    outline: none;
    font-size: 1em;
    padding: 0 10px;
    line-height: 50px;
    border-radius: 10px;
    border: 2px solid #c5c7cc63;
    background: transparent;
    transition: 0.1s ease;
    z-index: 1111;
}

.labella {
    /* position: relative; */
    font-size: 1.3em;
    color: #c5c7cc63;
    padding: 0 5px;
    margin: 0 20px;
    background-color: white; 
    transition: 0.2s ease; 
}

 input[type=text].focus,
input[type=text]:valid {
    color: #002138;
    border: 2px solid #002138;
} 

 input[type=text].focus+.labella,
input[type=text]:valid+.labella {
    color: #002138;
    height: 20px;
    line-height: 30px;
    transform: translate(-5px, -65px) scale(0.88);
    z-index: 1111;
} 

.subs {
    font-size: 17px;
    background: transparent;
    color: #000;
    text-decoration: none;
    font-family: 500;
    border: none;
    padding: 15px 29px;
    border: 2px solid rgb(1, 5, 28);
    border-radius: 10px;
    transition: 0.9s;
    position: relative;
    left: 35%;
}

.subs:hover {
    background: #01051c;
    letter-spacing: 3px;
    color: #fff;

}
    </style>
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

        <form method="POST" class="formal">

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

        $sql = "INSERT INTO cars4rent(fullname,number,address,cartype,carmodel, mileage, expectedrent) 
        values('$fullname','$contactnumbers','$homeaddress','$cartype','$carmodel','$mileage', '$expectedmonthlyrent')";
        $result = mysqli_query($conn, $sql);
    }
    ?>


</body>

</html>