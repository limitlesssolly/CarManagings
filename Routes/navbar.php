<?php

if($_GET['action']=='home'){
    header("Location:Views/Pages/index.php");
}
else if($_GET['action']=='book'){
    header("Location:../Views/Pages/bookyourcar.php");
}else if($_GET['action']=='/rent'){
    // header("Location:Views/Pages/User/rentyourcar.php");
}else if($_GET['action']=='about'){
    header("Location:../Views/Pages/aboutus.php");
}else if($_GET['action']=='ratings'){
    header("Location:../Views/Pages/User/ratings.php");
}else if($_GET['action']=='contactus'){
    header("Location:../Views/Pages/User/contactus.php");
}else if($_GET['action']=='signup'){
    header("Location:../Views/Pages/User/signup.php");
}

