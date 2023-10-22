<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/add.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Add Car</title>
</head>
<body>
<?php
    include("../Partials/dashboardsidebar.php");
    ?>
        <section class="home-section">
            <div class="home-content">
                <i class="bx bx-menu"></i>
                <span class="text">Dashboard</span>
            </div>
            <!-- form -->
<div class="contactForm">
                    <!-- <h2>Send us a message</h2> -->
                    <form  id="contactForm">

                    <div class="inputBox">
                            <input type="text" name="Type"  id="name">
                            <span>Name</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="Type"  id="Type">
                            <span>Type</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="Model" id="Model">
                            <span>Id</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="Plate" id="Plate">
                            <span>Plate Numbers</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="Colour" id="Color">
                            <span>Colour</span>
                        </div>

                        <div class="inputBox">
                   <label for="carPhoto">Car Photo</label>
                 <input type="file" name="CarPhoto" id="carPhoto">
                      </div>

                      
                        <div class="inputBox">
                            <label for="owned">Is the car owned by us?</label>
                             <input type="checkbox" name="Owned" id="owned">
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