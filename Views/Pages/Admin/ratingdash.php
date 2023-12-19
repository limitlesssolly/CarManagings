<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ratings</title>
        <link rel="stylesheet" href="../../../Public/CSS/ratingdash.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 260px;
    background: #11101d;
    z-index: 100;
    transition: all 0.5 ease;
}
.sidebar.close{
    width: 78px;
}
.sidebar .logo-details{
height: 60px;
width: 100%;
display: flex;
align-items: center;
}
.sidebar .logo-details i{
    font-size: 30px;
    color: #fff;
    /* background-color: red; */
    height:50px ;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
}
.sidebar .logo-details .logo_name{
    font-size: 17px;
    color: #fff;
    font-weight: 600;
    transition:0.3s ease;
    transition-delay:0.1s ;
}
.sidebar.close .logo-details .logo_name{
    transition-delay: 0s;
    opacity: 0;
    pointer-events: none;
}


.sidebar .nav-links{
  
    height: 100%;
    padding: 30px 0 150px 0;
    overflow: auto;
}

.sidebar.close .nav-links{
    overflow: visible;
}

.sidebar .nav-links::-webkit-scrollbar{
  display: none;  
}
.sidebar .nav-links li:hover{
background: #1d1b31;

}
.sidebar .nav-links li .iocn_link{
    display: flex;
    align-items: center;
    justify-content:space-between ;
}

.sidebar.close .nav-links li .iocn_link{
display: block;

}
.sidebar .nav-links li{
    position: relative;
    list-style: none;
    transition: all o.4s ease;
}

.sidebar .nav-links li i{
    height:50px ;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 20px;
    transition: all 0.3s ease;
    cursor: pointer;
}
.sidebar .nav-links li.showMenu i.arrow{

    transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
    display: none;

}
.sidebar .nav-links li a{
    text-decoration:none    ;
    align-items: center;
    display: flex;
}
.sidebar .nav-links li .link_name{
    font-size: 18px;
    font-weight: 400;
    color: #fff;
}
.sidebar.close .nav-links li .link_name{
    opacity: 0;
    pointer-events: none;
}

.sidebar .nav-links li .sub-menu{
    padding: 6px 6px 14px 80px;
    margin-top: -10px;
    background: #1d1b31;
    display: none;
}
.sidebar .nav-links li .sub-menu a{
   color: #fff;
   font-size: 15px; 
   padding: 5px 0;
   white-space: nowrap;
   opacity: 0.6;
   transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu .sub-menu{
display: block;

}
.sidebar .nav-links li .sub-menu a:hover{

opacity: 1;

}

.sidebar.close .nav-links li .sub-menu{
 position: absolute;
 left: 100%;
 top: -10px;
 margin-top: 0;
 padding: 10px 20px;
 border-radius: 0 6px 6px 0;
 
 opacity: 0;
 pointer-events: none;
 display: block;
 transition: 0s;
}

.sidebar.close .nav-links li:hover .sub-menu{
top: 0;
opacity: 1;
pointer-events: auto;
transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
display: none;
/* opacity: 1;
display: block; */
}
.sidebar.close .nav-links li .sub-menu .link_name{
    display: none;
    /* opacity: 1;
    display: block; */
    }




.sidebar.close .nav-links li .sub-menu .link_name{
    font-size: 18px;
    opacity: 1;
    display: block;

}
.sidebar .profile-details{
    position: fixed;
    bottom: 0;
    display: flex;
    width: 260px;
    align-items: center;
    justify-content: space-between;     
    background: #1d1b31;
    padding: 6px 0;
    transition: all 0.5s ease;
}
.sidebar.close .profile-details{
    width: 78px;
    background: none;
}
.sidebar .profile-details .profile-content{
display: flex;
align-items: center;

}
.sidebar .profile-details img{
    height: 52px;
    width: 52px;
    object-fit: cover;
    border-radius: 16px;
    margin: 0 14px 0 12px;
    background: #1d1b31;
    transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
   padding: 10px; 
}



.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
 color: #fff;  
 font-size: 18px;
 font-weight: 500; 
white-space: nowrap;
}
.sidebar.close .profile-details  i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
display: none;
}


.sidebar .profile-details .job{
    font-size: 12px;
}

.sidebar.close ~ .home-section{
    left: 78px;
    width: calc(100% - 78px) ;
}
  
  body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
      Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  }
  
  .main-container {
    padding: 30px;
  }
  
  /* HEADING */
  
  .heading {
    text-align: center;
  }
  
  .heading__title {
    font-weight: 600;
  }
  
  .heading__credits {
    margin: 10px 0px;
    color: #888888;
    font-size: 25px;
    transition: all 0.5s;
  }
  
  .heading__link {
    text-decoration: none;
  }
  
  .heading__credits .heading__link {
    color: inherit;
  }
  
  /* CARDS */
  
  .cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .card {
    margin: 20px;
    padding: 20px;
    width: 500px;
    min-height: 200px;
    display: grid;
    grid-template-rows: 20px 50px 1fr 50px;
    border-radius: 10px;
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
    transition: all 0.2s;
  }
  
  .card:hover {
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
    transform: scale(1.01);
  }
  
  .card__link,
  .card__exit,
  .card__icon {
    position: relative;
    text-decoration: none;
    color: rgba(255, 255, 255, 0.9);
  }
  
  .card__link::after {
    position: absolute;
    top: 25px;
    left: 0;
    content: "";
    width: 0%;
    height: 3px;
    background-color: rgba(255, 255, 255, 0.6);
    transition: all 0.5s;
  }
  
  .card__link:hover::after {
    width: 100%;
  }
  
  .card__exit {
    grid-row: 1/2;
    justify-self: end;
  }
  
  .card__icon {
    grid-row: 2/3;
    font-size: 18px;
    font-weight: 700;
    color: #cce9f7;
  }
  
  .card__title {
    grid-row: 3/4;
    font-size: 30px;
    font-weight: 500;
    color: #ffffff;
  }
  
  .card__apply {
    grid-row: 4/5;
    align-self: center;
  }
  
  /* CARD BACKGROUNDS */
  
  .card-1 {
    background: radial-gradient(#365976, #3db1ef);
  }
  
  .card-2 {
    background: radial-gradient(#3fbafe, #486377);
  }
  
  .card-3 {
    background: radial-gradient(#76b2fe, #b69efe);
  }
  
  .card-4 {
    background: radial-gradient(#60efbc, #58d5c9);
  }
  
  .card-5 {
    background: radial-gradient(#f588d8, #c0a3e5);
  }
  
  /* RESPONSIVE */
  
  @media (max-width: 1600px) {
    .cards {
      justify-content: center;
    }
  }
  
        </style>
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
                        <a href="driverrouter.php?action=drivers">
                            <i class='bx bxs-group'></i>
                            <span class="link_name" >Drivers</span>  
                        </a>
                        <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">    
                        <li><a class="link_name" >Drivers</a></li> 
                        <li><a href="driverrouter.php?action=drivers">show</a></li>  
                        <li><a href="driverrouter.php?action=adddriverpage">Add</a></li>   
                        <li><a href="driverrouter.php?action=editdriverpage">Edit</a></li>
                       
                     </ul>

                </li>
                 <li>

                    <div class="iocn_link">
                      <a href="CarsRouter.php?action=cars">
                        <i class='bx bxs-car'></i>
                        <span class="link_name">Cars</span>  
                      </a>
                      <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                         
 
                        <li><a href="CarsRouter.php?action=cars">Show</a></li>
                        <!-- <li><a href="../../Views/Pages/requestedcars.php">Requested Cars</a></li>  -->
                        <li><a href="Routes/CarsRouter.php?action=addcarpage">Add</a></li>
                        <li><a href="Routes/CarsRouter.php?action=editcarpage">Edit</a></li>
 
                
                    </ul>
                
                 </li>


                 <li>

                    <div class="iocn_link">
                    <a href="dashboardrouter.php?action=rides">
                        <i class='bx bx-trip'></i>
                        <span class="link_name">Rides</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Rides</a></li>  
                        <li><a href="dashboardrouter.php?action=assigndrivercarpage">Assign driver and car</a></li>  
                        
                        <li><a href="dashboardrouter.php?action=edittrippage">Edit</a></li>
                    </ul>
                </li>

                
                <li>

                    <div class="iocn_link">
                    <a href="EmployeesRouter.php?action=employees">
                        <i class='bx bx-group'></i>
                        <span class="link_name">Employes</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Employes</a></li>
                        <li><a href="EmployeesRouter.php?action=employees">Show</a></li>
                        <li><a href="EmployeesRouter.php?action=addemployeepage">Add</a></li>
                        <li><a href="EmployeesRouter.php?action=editemployeepage">Edit</a></li>
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
                    <a href="adminrouter.php?action=showratings">
                    <i class='bx bx-star'></i>
                        <span class="link_name">Ratings</span>  
                    </a>
                    </div>
                </li> 
 
                <li>
                    <div class="iocn_link">
                    <a href="adminrouter.php?action=admins">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Admins</span>  
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>  
                    </div>

                    <ul class="sub-menu">
                    <li><a class="link_name" href="">Admins</a></li>
                    <li><a href="adminrouter.php?action=admins">Show</a></li>
                    <li><a href="adminrouter.php?action=addadminpage">Add</a></li>
                    <li><a href="adminrouter.php?action=editpage">Edit</a></li>
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
       
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Dashboard</span>
    </div>
    <div class="main-container">
        <div class="heading">
        </div>
        <div class="cards">
            <?php
            if (is_array($ratings) && !empty($ratings)) {
            foreach ($ratings as $rating) {
                ?>
                <div class="card card-1">
                    <div class="card__icon">
                        <p>From: <?php echo $rating['Name']; ?></p>
                    </div>
                    <p class="card__exit"><i class="fas fa-times"></i></p>
                    <h2 class="card__title"><?php echo $rating['Rate']; ?></h2>
                </div>
                <?php
            }
        } else {
            echo "No ratings available.";
        }
            ?>
        </div>
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
</body>
</html>