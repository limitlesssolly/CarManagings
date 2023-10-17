
 <!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Cars</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   
    <link rel="stylesheet" href="../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../Public/CSS/carshowdash.css">
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
            <main class="table">
        <section class="table__header">
            <h1>Our Cars</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../../Public/Images/search.png" alt="">
            </div>
            <div class="export__file">
        
         
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Type<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Profit <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td>
                        <td> Sedan </td>
                        <td> 123|ن ص ع </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong> $128.90 </strong></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td><img src="../../Public/Images/carla.png" alt=""> Toyota </td>
                    
                        <td> suv </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$5350.50</strong> </td>
                    </tr>
                    <tr>
                        <td> 3</td>
                        <td><img src="../../Public/Images/carla.png" alt=""> Mitsubishsi </td>
                        <td> suv </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status shipped">Shipped</p>
                        </td>
                        <td> <strong>$210.40</strong> </td>
                    </tr>
                    <tr>
                        <td> 4</td>
                        <td><img src="../../Public/Images/carla.png" alt=""> Hyundai </td>
                        <td> suv </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong>$149.70</strong> </td>
                    </tr>
                    <tr>
                        <td> 5</td>
                        <td><img src="../../Public/Images/carla.png" alt="">Nissan </td>
                        <td> sedan </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 6</td>
                        <td><img src="../../Public/Images/carla.png" alt=""> Hai S </td>
                        <td> van </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 7</td>
                        <td><img src="../../Public/Images/carla.png" alt=""> Hyundai </td>
                        <td> sedan </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 8</td>
                        <td><img src="../../Public/Images/carla.png" alt=""> Nissan </td>
                        <td> hatchback </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td> <strong>$149.70</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="../../Public/Images/carla.png" alt="">Hyundai </td>
                        <td> Suv </td>
                        <td> 154|ت ص غ </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$249.99</strong> </td>
                    </tr>
                </tbody>
                <script src="../../Public/js/carshowdash.js"></script>
            </table>
            
        </section>
    </main>

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