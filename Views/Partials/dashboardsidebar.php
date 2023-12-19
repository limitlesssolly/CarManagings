<<<<<<< Updated upstream
<?php
//session_start();    
?>
=======

>>>>>>> Stashed changes
<div class="sidebar ">
            <div class="logo-details">
                <i class='bx bxs-dashboard'></i>
                <span class="logo_name">24Sevenlimousine</span>
   
            </div>

            <ul class="nav-links">
                 <li>
                    <div class="iocn_link">
                        <a href="../../../Routes/driverrouter.php?action=drivers">
                            <i class='bx bxs-group'></i>
                            <span class="link_name" >Drivers</span>  
                        </a>
                        <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">    
                        <li><a class="link_name" >Drivers</a></li> 
                        <li><a href="../../../Routes/driverrouter.php?action=drivers">show</a></li>  
                        <li><a href="../../../Routes/driverrouter.php?action=adddriverpage">Add</a></li>   
                        <li><a href="../../../Routes/driverrouter.php?action=editdriverpage">Edit</a></li>
                       
                     </ul>

                </li>
                 <li>

                    <div class="iocn_link">
                      <a href="../../../Routes/CarsRouter.php?action=cars">
                        <i class='bx bxs-car'></i>
                        <span class="link_name">Cars</span>  
                      </a>
                      <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                         
 
                        <li><a href="../../../Routes/CarsRouter.php?action=cars">Show</a></li>
                        <!-- <li><a href="../../Views/Pages/requestedcars.php">Requested Cars</a></li>  -->
                        <li><a href="../../../Routes/CarsRouter.php?action=addcarpage">Add</a></li>
                        <li><a href="../../../Routes/CarsRouter.php?action=editcarpage">Edit</a></li>
 
                
                    </ul>
                
                 </li>


                 <li>

                    <div class="iocn_link">
                    <a href="../../../Routes/dashboardrouter.php?action=rides">
                        <i class='bx bx-trip'></i>
                        <span class="link_name">Rides</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Rides</a></li>  
                        <li><a href="../../../Routes/dashboardrouter.php?action=assigndrivercarpage">Assign driver and car</a></li>  
                        
                        <li><a href="../../../Routes/dashboardrouter.php?action=edittrippage">Edit</a></li>
                    </ul>
                </li>

                
                <li>

                    <div class="iocn_link">
                    <a href="../Pages/employees.php">
                        <i class='bx bx-group'></i>
                        <span class="link_name">Employes</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Employes</a></li>
                        <li><a href="../../Admin/Employees/employees.php">Show</a></li>
                        <li><a href="../../Admin/Employees/addemployee.php">Add</a></li>
                        <li><a href="../../Admin/Employees/editemployees.php">Edit</a></li>
                    </ul>

                </li>

                <li>

                        <div class="iocn_link">
                        <a href="../Pages/customers.php">
                            <i class='bx bx-group'></i>
                            <span class="link_name">Customers</span>  
                        </a>
                        <i class='bx bx-chevron-down arrow'></i>  
                        </div>

                        <ul class="sub-menu">
                            <li><a class="link_name" href="">Customers</a></li>
                            <li><a href="../../Admin/Customers/customers.php">Show</a></li>
                            <li><a href="../../Admin/Customers/addcustomers.php">Add</a></li>
                            <li><a href="../../Admin/Customers/editcustomers.php">Edit</a></li>
                        </ul>
                        

                </li>
                <li>

                    <div class="iocn_link">
                    <a href="../../Views/Pages/ratingdash.php">
                    <i class='bx bx-star'></i>
                        <span class="link_name">Ratings</span>  
                    </a>
                    </div>



                </li> 
 
                <li>

                    <div class="iocn_link">
                    <a href="../../../Routes/adminrouter.php?action=admins">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Admins</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                    <li><a class="link_name" href="">Admins</a></li>
                    <li><a href="../../Views/Pages/admins.php">Show</a></li>
                    <li><a href="../../../Routes/adminrouter.php?action=addadminpage">Add</a></li>
                    <li><a href="../../../Routes/adminrouter.php?action=editpage">Edit</a></li>
                    </ul>


                </li>
               
                <li>

                    <div class="iocn_link">
                    <a href="../../Views/Pages/editprofiledash.php">
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
                         <img src="../../../Public/Images/flag.png" alt="">
                       </div>

             
                       <div class="name-job">
                          <div class="profile_name"><?php 
        if (isset($_SESSION["Name"])) {
            $username = $_SESSION["Name"];
            echo " $username";
        } else {
            echo " Guest!";
        }
        ?></div>
                          <div class="job">Admin</div>
                       </div>
                       <a href="../../../App/Controllers/logout.php"><i class='bx bx-log-out'></i></a>
                    </div>
                </li>   
            </ul>  

        </div>
       