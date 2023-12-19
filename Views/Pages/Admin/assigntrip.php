<?php
// include_once "../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../Public/CSS/adddrivers.css"> -->
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    margin-top: 75px; 
    margin-bottom: 40px;
    padding: 30px 40px;
  
    background-color: white; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    
}
h1{
    font-size: 30px;
    color:black;
} 
.title {
    text-align: center;
    font-size: 3vh;
}

 form {
    text-align: center;
    /* margin-top: -5px; */
}

input[type=text],
input[type=email],
select,
textarea {
    width: 100%;
    padding: 13px;
    border: 1px solid #01051c;
    border-radius: 4px;
    resize: vertical;
    margin: 3px;
}

label {
    padding: 10px 10px 10px 10px;
    display: inline-block;
}

button {
    font-size: 17px;
    width: 200px;
    background: transparent;
    color: #000;
    text-decoration: none;
    font-family: 500;
    border: none;
    padding: 15px 39px;
    margin-top: 20px;
    border: 1px solid rgb(1, 5, 28);
    border-radius: 4px;
    transition: 0.9s;
    position: relative;
    cursor: pointer;
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
    include("../../Partials/dashboardsidebar.php");
    ?>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>
        <div class="adddrivers">
            <section>
                <div class="container" >
                    <h1>Requirements</h1>
                    <form action="" method="post">

                        <div>
                        <label for="fullname">Ride ID</label>
                            <input type="text" class="field" id="rideid" placeholder="1234" required> <br>
                        </div>  
                         <div class="name">
                            <label for="fullname">Driver ID</label>
                            <input type="text" class="field" id="driverid" placeholder="1234" required> <br>
                        </div>
                            <!--
                        <div class="contactinfo">
                            <label for="contactnumbers">Driver Email</label>
                            <input type="email" class="field" name="email" placeholder="mail@gmail.com" required> 
                        </div>

                        <div class="contactinfo">
                            <label for="contactnumbers">Driver Number</label>
                            <input type="text" class="field" name="phone" placeholder="0123456789" required>  
                        </div> -->

                        <div class="status">
                        <label for="salary">Car Id</label>
                            <input type="text" class="field" name="carplate" id='carid' placeholder="1234" required>  
                            <!-- <label for="salary">Car Plate</label>
                            <input type="text" class="field" name="carplate" placeholder="available,in trip,in vacation " required>                           
                            <label for="date">Car Name </label>
                            <input type="text" class="field" name="carname" required> <br> -->

                        </div>

                        <div class="subs">
                            <button type="submit" name="submit">Assign </button>
                        </div>
                    </form>
                    <script src="../../../Public/js/assigndrivercar.js"></script>
                </div>
            </section>
        </div>
    </section>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = htmlspecialchars($_POST["name"]);
         $email = htmlspecialchars($_POST["email"]);
         $phone = htmlspecialchars($_POST["phone"]);
         $status = htmlspecialchars($_POST["status"]);
         $date = htmlspecialchars($_POST["date"]);

         $sql = "insert into drivers(Name,Email,Phone,Status,Dateofemployment) 
         values('$name','$email','$phone','$status', '$date')";
         $result = mysqli_query($conn, $sql);

         if ($result) {
            //  header("Location:drivers.php");
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