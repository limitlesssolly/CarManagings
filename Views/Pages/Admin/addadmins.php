<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/CSS/editprofiledash.css">
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../../../Public/CSS/alert.css">
    <title>Add admin</title>
    <style>
        .error{
            color:red ;
        }
        body{
            overflow: hidden;
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
            <!-- form -->
            <div class="alert hide"> 
                        <span class="fas fa-check-circle"></span>
                        <span class="msg">Added Successfully!</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
        </div>
            <div class="contactForm">
                    <h2 style="font-size: 21px;">Adding New admin</h2>
                    <form  id="contactForm">

                        <div class="inputBox">
                            <input type="text" name="name"  id="name" required>
                            <span>Name</span>
                            <p class="error" id='nameerror'></p>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" id="email" required>
                            <span>Email</span>
                            <p class="error" id='emailerror'></p>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="phone" id="phone" required>
                            <span>Phone</span>
                            <p class="error" id='phoneerror'></p>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" id="pass" required>
                            <span>Password</span>
                            <p class="error" id='passerror'></p>
                        </div>

                        <div class="inputBox">
                            <input type="password" name="password" id="confirmpass" required>
                            <span> Confirm Password</span>
                            <p class="error" id='confirmpasserror'></p>
                        </div>
                        <div id="error"> </div>
                        <div class="inputBox">
                            <input type="submit" value="SEND">
                        </div>
                    </form>
                    <script src="../../../Public/js/addadmin.js"></script>
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
