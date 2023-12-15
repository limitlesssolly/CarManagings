<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/CSS/editprofiledash.css">
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../Public/CSS/alert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Edit admin</title>
    <style>
        body{
            overflow: hidden;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
        <?php
          include('../../Partials/dashboardsidebar.php');
        ?> 
        <section class="home-section">
            <div class="home-content">
                <i class="bx bx-menu"></i>
                <span class="text">Dashboard</span>
            </div>
            <div class="alert hide"> 
                        <span class="fas fa-check-circle"></span>
                        <span class="msg">Edited Successfully!</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
        </div>
            <!-- form -->
            <div class="contactForm">
                    <h2>Updating info</h2>
                    <form  id="contactForm">

                
                    <div class="inputBox">
                            <input type="text" name="id" id="id"  required>
                            <span>ID</span>
                            <p class="error" id='iderror'></p>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" id="email"  required>
                            <span>Email</span>
                            <p class="error" id='emailerror'></p>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="name" id="address" required>
                            <span>Name</span>
                            <p class="error" id='nameerror'></p>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="phone" id="phone" required>
                            <span>Phone</span>
                            <p class="error" id='phoneerror'></p>
                        </div>

                        <div class="inputBox">
                            <input type="password" name="pass" id="pass"  required>
                            <span>New Password</span>
                            <p class="error" id='passerror'></p>
                        </div>

                        <div class="inputBox">
                            <input type="password" name="confirmpass" id="confirmpass"  required>
                            <span>Confirm New Password</span>
                            <p class="error" id='confirmpasserror'></p>
                        </div>

                        <div id="error"> </div>

                        <div class="inputBox">
                            <input type="submit" value="SEND">
                        </div>    
                        
                    </form>
                    <script src="../../../Public/js/editadmin.js"></script>
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
