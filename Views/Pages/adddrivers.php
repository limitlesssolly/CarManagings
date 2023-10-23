<?php
include_once "../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../Public/CSS/adddrivers.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Drivers</title>
</head>

<style>
    * {
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Ubuntu', sans-serif;
    /* margin:2px 0px;  */
    padding:0px;
    text-align:center;
}

.container {
    position: relative;
    max-width: 500px;
    margin-left: 30%;
    margin-top: 30px; 
    margin-bottom: 30px;
    padding: 20px 40px;
    
    background-color: #ffffff; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}
.title {
    text-align: center;
    font-size: 3vh;
}

 form {
    text-align: center;
}

input[type=text],
select,
textarea {
    width: 100%;
    padding: 13px;
    border: 1px solid #01051c;
    border-radius: 4px;
    resize: vertical;
    margin: 10px;
}

label {
    padding: 10px 10px 10px 10px;
    display: inline-block;
}

button {
    font-size: 17px;
    background: transparent;
    color: #000;
    text-decoration: none;
    font-family: 500;
    border: none;
    padding: 15px 29px;
    border: 1px solid rgb(1, 5, 28);
    border-radius: 4px;
    transition: 0.9s;
    position: relative;
    right: 0%;
}

button:hover {
    background: #01051c;
    letter-spacing: 3px;
    color: #fff;

}
</style>

<body>
    <?php
    include("../Partials/dashboardsidebar.php");
    ?>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>
        <div class="adddrivers">
            <section>
                <div class="container">
                    <h3>Add a driver</h3>
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
                            <button type="submit" name="submit">Add </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
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

    <?php
    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
     }*/
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