<?php
include_once "../../includes/db.php";
$username = "root";
$password = "";
$database = "24sevenlimousine";
$mysqli = new mysqli("localhost", $username, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../Public/CSS/adddrivers.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Edit-Driver</title>
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
    /* margin-top: 30px;  */
    margin-bottom: 30px;
    padding: 20px 40px;
   
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
    padding: 10px;
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
    width: 200px;
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
                <div class="container" >
                    <h1>Update driver info</h1>
                    <form action="" method="post">
                        <div class="contactinfo">
                            <label for="contactnumbers">Email</label>
                            <input type="email" class="field" name="email" placeholder="enter the email of the specific driver for editing" required> 
                        </div>
                        <div class="name">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="field" name="name" placeholder="enter new name" > <br>
                        </div>

                       

                        <div class="contactinfo">
                            <label for="contactnumbers">Contact Number</label>
                            <input type="text" class="field" name="phone" placeholder="enter new phone" >  
                        </div>

                        <div class="status">
                            
                            <label for="salary">Status</label>
                            <input type="text" class="field" name="status" placeholder="enter new status" >                           

                            

                        </div>

                        <div class="subs">
                            <button type="submit" name="submit">Add </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>




                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                         $email=$_POST['email'];
                         $name=$_POST['name'];
                         $phone=$_POST['phone'];
                         $status=$_POST['status'];
                         $c=0;
                         if( $email !=null && $name!=null){
                            $sql = "UPDATE drivers SET Name = '$name' WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            $c++;
                         }
                         if( $email !=null && $phone!=null){
                            $sql = "UPDATE drivers SET Phone = '$phone' WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            $c++;
                         }

                         if( $email !=null && $totalhours!=null){
                            $sql = "UPDATE drivers SET Status = $status WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            $c++;
                         }

  
                         if ($c>0) {
                            echo "<meta http-equiv='refresh' content='0'>";
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