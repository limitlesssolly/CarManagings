<?php

require "../../../../App/Models/drivers.php";
require "../../../../App/Controllers/DriversControllers.php";
$model = new Driver($id, $name, $email, $phone, $dateofemployment, $status);
$controller = new DriversController($model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/CSS/adddrivers.css">
    <link rel="stylesheet" href="../../../../Public/CSS/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Drivers</title>
</head>

<body>
    <?php
    include("../../../Partials/dashboardsidebar.php");
    ?>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>
        <div class="adddrivers">
            <section>
                <div class="container">
                    <h1>Add a driver</h1>
                    <form action="adddrivers.php?action=add" method="post">

                        <div class="name">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="field" name="name" placeholder="samy salama" required> <br>
                        </div>

                        <div class="contactinfo">
                            <label for="contactnumbers">Email</label>
                            <input type="email" class="field" name="email" id="email" placeholder="mail@gmail.com"
                                required>
                            <span id="Validation"></span>
                        </div>

                        <div class="contactinfo">
                            <label for="contactnumbers">Contact Number</label>
                            <input type="text" class="field" name="phone" placeholder="0123456789" required>
                        </div>

                        <div class="status">

                            <label for="date">date of employment </label>
                            <input type="date" class="field" name="date" required> <br>

                            <label for="salary">Status</label>
                            <input type="text" class="field" name="status" placeholder="available,in trip,in vacation "
                                required>

                        </div>

                        <div class="subs">
                            <button type="submit" id="sign" name="submit">Add </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>


    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //      $name = htmlspecialchars($_POST["name"]);
    //      $email = htmlspecialchars($_POST["email"]);
    //      $phone = htmlspecialchars($_POST["phone"]);
    //      $status = htmlspecialchars($_POST["status"]);
    //      $date = htmlspecialchars($_POST["date"]);
    
    //      $sql = "insert into drivers(Name,Email,Phone,Status,Dateofemployment) 
    //      values('$name','$email','$phone','$status', '$date')";
    //      $result = mysqli_query($conn, $sql);
    
    //      if ($result) {
    //         //  header("Location:drivers.php");
    //      }
    //  }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../../Public/js/addDriver.js"></script>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent)
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close")
        })


    </script>
</body>

</html>