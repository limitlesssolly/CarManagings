<?php
session_start();
require_once("../App/Controllers/DriversControllers.php");

$driver=new DriversController('DriversControllers');

 if($_GET['action']=='drivers'){
    // $result=$book->getrides();
    // $_SESSION['AllRides']=array(); 
 
    // $i=0; 
    // while ($row =  $result->fetch_assoc()) {
     
    //  $_SESSION['AllDrivers'][$i]=[
 
    //      'ID'=>$row['ID'], 
    //      'pickupLocation'=>  $row['pickupLocation'] , 
    //      'pickupDestination'=> $row['pickupDestination'],  
    //      'PickupDate'=> $row['PickupDate']  ,
    //      'pickupTime'=> $row['pickupTime']  ,
    //      'DriverID'=>  $row['DriverID']  ,
    //      'UserName'=>  $row['UserName'] , 
    //      'UserEmail'=>  $row['UserEmail'] , 
    //      'UserPhone'=> $row['UserPhone']  , 
    //      'Status'=>  $row['Status'],  
    //      'CarPlate'=> $row['CarPlate']  ,
    //      'CarType'=>   $row['CarType']  ,
    //      'Comment'=>  $row['Comment'] , 
    //      'PaymentWay'=> $row['PaymentWay']  ,
    //      'TotalCost'=>   $row['TotalCost']  
    //  ]; 
    // $i++; 
    // }
 
 
    header("Location:../Views/Pages/Admin/drivers.php");
   

}else if($_GET['action']=='assigndrivercar'){
    header("Location:../Views/Pages/Admin/assigntrip.php");

}
