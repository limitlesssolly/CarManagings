<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../Public/CSS/editprofiledash.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Edit your profile</title>
</head>
<body>
    <?php
    include("../../Partials/dashboardsidebar.php");
    ?>
        <section class="home-section">
            <div class="home-content">
                <i class="bx bx-menu"></i>
                <span class="text">Dashboard</span>
            </div>
            <!-- form -->
<div class="contactForm" style="background-color: transparent;">
                    <h2>Updating Info</h2>
                    <form  id="contactForm">

                        <div class="inputBox">
                            <input type="text" name="name"  id="name" required>
                            <span>Name</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="email" id="email" required>
                            <span>Email</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="email" id="address" required>
                            <span>Address</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="password" id="password" required>
                            <span>Password</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="password" id="confirmpassword" required>
                            <span> Confirm Password</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="phone" id="phone" required>
                            <span>Phone</span>
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

                



</body>
</html>