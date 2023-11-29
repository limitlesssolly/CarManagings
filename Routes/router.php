<?php

if($_GET['action']=='/home'){
    header("Location:Views/Pages/index.php");
}
else if($_GET['action']=='/book'){
    header("Location:Views/Pages/User/bookyourcar.php");
}else if($_GET['action']=='/rent'){
    header("Location:Views/Pages/User/rentyourcar.php");
}else if($_GET['action']=='/about'){
    header("Location:Views/Pages/User/aboutus.php");
}else if($_GET['action']=='/ratings'){
    header("Location:Views/Pages/User/ratings.php");
}else if($_GET['action']=='/contactus'){
    header("Location:Views/Pages/User/contactus.php");
}else if($_GET['action']=='/signup'){
    header("Location:Views/Pages/User/signup.php");
}else if($_GET['action']=='/drivers'){
    header("Location:Views/Pages/Admin/Drivers/drivers.php");
}else if($_GET['action']=='/drivers/add'){
    header("Location:Views/Pages/Admin/Drivers/adddrivers.php");
}else if($_GET['action']=='/drivers/edit'){
    header("Location:Views/Pages/Admin/Drivers/editdrivers.php");
}else if($_GET['action']=='/drivers/delete'){
    header("Location:Views/Pages/Admin/Drivers/deletedrivers.php");
}else if($_GET['action']=='/drivers/history'){
    header("Location:Views/Pages/Admin/Drivers/driverhistory.php");
}

if($_GET['action']=='/home'){
    
    echo $_POST['start'];
    echo $_POST['end'];
    exit;
}
