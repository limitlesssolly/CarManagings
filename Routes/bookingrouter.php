<?php

require_once("Controllers/booking.php");
$book=new Booking();
if($_GET['action']=='firstvalidation'){
    $result =$book->firstvalidation($_POST['start'],$_POST['end'],$_POST['date'],$_POST['time']);
    if($result =='successful'){
        echo 'successful';
       
    }else{

        echo "failed";
        // $_SESSION['error']=$result;
        // header("Location:Views/Pages/bookyourcar.php");
       
    }
    
   
}
?>