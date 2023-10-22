<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/addCar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Add Car</title>
</head>
<body>
<div class="sidebar ">
            <div class="logo-details">
                <i class='bx bxs-dashboard'></i>
                <span class="logo_name">24Sevenlimousine</span>
   
            </div>

            <ul class="nav-links">

                 <li>

                    <div class="iocn_link">
                        <a href="">
                            <i class='bx bxs-group'></i>
                            <span class="link_name">Drivers</span>  
                        </a>
                        <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Drivers</a></li>
                        <li><a href="">Add</a></li>   
                        <li><a href="">Edit</a></li>
                        <li><a href="">Delete</a></li>
                    </ul>


                </li>
                 <li>

                    <div class="iocn_link">
                      <a href="">
                        <i class='bx bxs-car'></i>
                        <span class="link_name">Cars</span>  
                      </a>
                      <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="../../Views/Pages/carshowdash.php">Cars</a></li>    
                        <li><a href="">Add</a></li>
                        <li><a href="">Edit</a></li>
                        <li><a href="">Delete</a></li>
                    </ul>
                
                 </li>


                 <li>

                    <div class="iocn_link">
                    <a href="">
                        <i class='bx bx-trip'></i>
                        <span class="link_name">Rides</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Rides</a></li>  
                        <li><a href="">Add</a></li> 
                        <li><a href="">Edit</a></li>
                        <li><a href="">Delete</a></li>
                    </ul>

                </li>

                    

                <li>

                    <div class="iocn_link">
                    <a href="">
                        <i class='bx bx-group'></i>
                        <span class="link_name">Employes</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Employes</a></li>
                        <li><a href="">Add</a></li>
                        <li><a href="">Edit</a></li>
                        <li><a href="">Delete</a></li>
                    </ul>

                </li>

                <li>

                    <div class="iocn_link">
                    <a href="">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">Settings</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Settings</a></li>   
                        <li><a href="../../Views/Pages/editprofiledash.php">Edit your profile</a></li>
                  
                    </ul>

                </li>  


            
                <li>
                  <div class="profile-details">
                       <div class="profile-content">
                         <img src="../../Public/Images/flag.png" alt="">
                       </div>

             
                       <div class="name-job">
                          <div class="profile_name">Saher Amr</div>
                          <div class="job">Admin</div>
                       </div>
                       <i class='bx bx-log-out'></i> 
                    </div>
                </li>   
            </ul>  

        </div>
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