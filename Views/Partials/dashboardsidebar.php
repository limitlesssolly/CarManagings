<link rel="stylesheet" href="../../Public/CSS/dashboard.css">
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
                        <li><a class="link_name" href="../Pages/drivers.php">Drivers</a></li>
                        <li><a href="../Pages/adddrivers.php">Add</a></li>   
                        <li><a href="../Pages/editdrivers.php">Edit</a></li>
                        <li><a href="../Pages/deletedrivers.php">Delete</a></li>
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
                        <li><a class="link_name" href="">Cars</a></li>    
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
                        <li><a href="">Edit your profile</a></li>

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