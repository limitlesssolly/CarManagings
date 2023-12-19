<?php
session_start();
require_once("../App/Controllers/ridesdashcont.php");

$book=new Booking();

 if($_GET['action']=='rides'){
    $result=$book->getrides();
    $_SESSION['AllRides']=array(); 
 
    $i=0; 
    while ($row =  $result->fetch_assoc()) {
     
     $_SESSION['AllRides'][$i]=[
 
         'ID'=>$row['ID'], 
         'pickupLocation'=>  $row['pickupLocation'] , 
         'pickupDestination'=> $row['pickupDestination'],  
         'PickupDate'=> $row['PickupDate']  ,
         'pickupTime'=> $row['pickupTime']  ,
         'DriverID'=>  $row['DriverID']  ,
         'UserName'=>  $row['UserName'] , 
         'UserEmail'=>  $row['UserEmail'] , 
         'UserPhone'=> $row['UserPhone']  , 
         'Status'=>  $row['Status'],
         'CarID'=> $row['CarID']  ,  
         'CarPlate'=> $row['CarPlate']  ,
         'CarType'=>   $row['CarType']  ,
         'Comment'=>  $row['Comment'] , 
         'PaymentWay'=> $row['PaymentWay']  ,
         'TotalCost'=>   $row['TotalCost']  
     ]; 
    $i++; 
    }
 
 //    echo  $_SESSION['AllRides'][0]['ID'];
 
    header("Location:../Views/Pages/Admin/trips.php");
   
}else if($_GET['action']=='assigndrivercarpage'){
    header("Location:../Views/Pages/Admin/assigntrip.php");

}else if($_GET["action"]== "assigndrivercar"){

    $result= $book->Assigndrivercar( $_POST['rideid'], $_POST['driverid'], $_POST['carid']);
    if($result=='successful'){
        echo 'successful';
    }else {
        echo $result;
    }   

}else if($_GET["action"]== "cancelride"){
    $result= $book->CancelRide( $_POST['id']);
    if($result== 'successful'){
        echo 'sucessful';
    }else{
        echo "error";
    }
}
else if($_GET["action"]== "edittrippage"){

    header("Location:../Views/Pages/Admin/edittrip.php");

}else if($_GET["action"]== "editride"){

    $result= $book->editRide( $_POST['rideid'],$_POST['carid'],$_POST['driverid'],$_POST['status']);    
    if($result== 'successful'){
        echo 'sucessful';
    }else{
        echo "error";
    }
}