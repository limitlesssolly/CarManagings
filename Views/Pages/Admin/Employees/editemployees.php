<?php
// include_once "../../includes/db.php";
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
    <link rel="stylesheet" href="../../../../Public/CSS/editprofiledash.css">
    <link rel="stylesheet" href="../../../../Public/CSS/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Edit employee</title>
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
            <div class="contactForm">
                    <h2>Updating info</h2>
                    <form  id="contactForm" method="post">

                        <div class="inputBox">
                            <input type="text" name="email" id="address" placeholder="please enter the email of the employee">
                            <span>Email</span>
                        </div>
                        
                        <div class="inputBox">
                            <input type="text" name="name" id="email" >
                            <span>Name</span>
                        </div>

                      


                        <div class="inputBox">
                            <input type="text" name="phone" id="phone" >
                            <span>Phone</span>
                        </div>


                        <div class="inputBox">
                            <input type="text" name="totalhours" id="phone" >
                            <span>Total Hours</span>
                        </div>
                     
                        <div class="inputBox">
                            <input type="text" name="salary" id="phone" >
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


                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                         $email=$_POST['email'];
                         $name=$_POST['name'];
                         $phone=$_POST['phone'];
                         $totalhours=$_POST['totalhours'];
                         $salary=$_POST['salary'];
                         echo '$email';
                         $c=0;
                         if( $email !=null && $name!=null){
                            $sql = "UPDATE employees SET Name = '$name' WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            $c++;
                         }
                         if( $email !=null && $phone!=null){
                            $sql = "UPDATE employees SET Phone = '$phone' WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            $c++;
                         }

                         if( $email !=null && $totalhours!=null){
                            $sql = "UPDATE employees SET TotalHours = $totalhours WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            $c++;
                         }

                         if( $email !=null && $salary!=null){
                            $sql = "UPDATE employees SET salary = $salary WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            $c++;
                         }

  
                         if ($c>0) {
                            echo "<meta http-equiv='refresh' content='0'>";
                         }
                    }
                    
                 ?>


                



</body>
</html>