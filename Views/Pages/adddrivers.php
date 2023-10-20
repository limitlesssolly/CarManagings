<?php
include_once "../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/adddrivers.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Drivers</title>
</head>

<body>
    <?php
    include("../Partials/dashboardsidebar.php");
    ?>
    <div class="adddrivers">
        <section>
            <form action="" method="post">

                <div class="name">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="field" name="fullname" placeholder="samy salama"> <br>
                </div>

                <div class="contactinfo">
                    <label for="contactnumbers">Contact Number</label>
                    <input type="text" class="field" name="contactnumbers" placeholder="0123456789"> <br>
                </div>

                <div class="status">
                    <label for="salary">expected salary</label>
                    <input type="text" class="field" name="salary" placeholder="50000"> <br>

                    <label for="date">date of employment </label>
                    <input type="date" class="field" name="date"> <br>

                    <label for="liscenced">liscenced</label>
                    <input type="radio" name="liscenced">
                    <input type="radio" name="liscenced"> <br>
                </div>

                <div class="subs">
                    <input type="submit" name="submit" value="add driver">
                </div>
            </form>
        </section>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = htmlspecialchars($_POST["fullname"]);
        $contactnumbers = htmlspecialchars($_POST["contactnumbers"]);
        $salary = htmlspecialchars($_POST["salary"]);
        $date = htmlspecialchars($_POST["date"]);
        $liscenced = htmlspecialchars($_POST["liscenced"]);

        $sql = "insert into drivers(fullname,number,salary,date,liscenced) 
        values('$fullname','$contactnumbers','$salary','$date', '$liscenced')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // print("el donia lessa bkheer");
        }
    }
    ?>

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