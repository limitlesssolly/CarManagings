<?php
// include_once "../../includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="../../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../../Public/CSS/editprofiledash.css">
    <link rel="stylesheet" href="../../../../Public/CSS/addemployee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Add employee</title>
    <style>
        .contactForm{
            position: relative;
            top: -43px;
        }
    </style>
</head>
<body>  
        <?php
          include('../../../Partials/dashboardsidebar.php');
        ?> 
          <section class="home-section">
            <div class="home-content">
                <i class="bx bx-menu"></i>
                <span class="text">Dashboard</span>
            </div>
            <!-- form -->
            
            <div class="contactForm" >
                    <h2 style="font-size: 21px;">Adding New Employee</h2>
                    <form method="post" id="contactForm">

                        <div class="inputBox">
                            <input type="text" name="name"  id="name" required>
                            <span>Name</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="email" id="email" required>
                            <span>Email</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="password" id="password" required>
                            <span>Password</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="confirmpassword" id="confirmpassword" required>
                            <span> Confirm Password</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="phone" id="phone" required >
                            <span>Phone</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="doe" id="phone" required >
                            <span>Date of Employment</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="totalhours" id="phone" required>
                            <span>Total Hours</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="salary" id="phone"  required>
                            <span>Salary</span>
                        </div>
              
                     
                        <div id="error"> </div>

                      

                        <div class="inputBox">
                            <input type="submit" value="SEND">
                        </div>
                        
                    </form>
                    <!-- <script src="js/contactus.js"></script> -->
                </div>
<!-- end of form -->
        </section>    
        <?php 
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $totalhours = htmlspecialchars($_POST["totalhours"]);
            $salary = htmlspecialchars($_POST["salary"]);
            $pass=htmlspecialchars($_POST["password"]);
            $doe=htmlspecialchars($_POST["doe"]);

            $sql = "insert into employees(Name,Email,Password,Phone,DateOfEmployment,TotalHours,Salary) 
            values('$name','$email','$pass','$phone','$doe','$totalhours', '$salary')";
            $result = mysqli_query($conn, $sql);
   
            if ($result) {
                // header("Location:drivers.php");
            }
        }
        
        
        ?>
        <script>
            let arrow = document.querySelectorAll(".arrow");
            for(var i=0;i<arrow.length;i++){
                arrow[i].addEventListener("click",(e)=>{
                    let arrowParent=e.target.parentElement.parentElement;
                    console.log(arrowParent)
                    arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar=document.querySelector(".sidebar");
            let sidebarBtn=document.querySelector(".bx-menu");
            sidebarBtn.addEventListener("click",()=>{
                sidebar.classList.toggle("close")
            })


        </script>

                



</body>
</html>