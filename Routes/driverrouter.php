<?php
session_start();
require_once("../App/Controllers/DriversControllers.php");

$driver=new DriversController('DriversControllers');

 if($_GET['action']=='drivers'){
    $result=$driver->getdrivers();
    $_SESSION['Alldrivers']=array(); 
 
    $i=0; 
    while ($row =$result->fetch_assoc()) {
     
     $_SESSION['Alldrivers'][$i]=[
 
         'ID'=>$row['ID'], 
         'Name'=>  $row['Name'] , 
         'Email'=> $row['Email'],  
         'Phone'=> $row['Phone']  ,
         'Status'=> $row['status'] ,
         'dateofemployment'=>  $row['dateofemployment'] ,
     ]; 
    $i++; 
    } 
    
    header("Location:../Views/Pages/Admin/drivers.php");

}
else if($_GET['action']=='adddriverpage'){
    header("Location:../Views/Pages/Admin/adddrivers.php");

}
else if($_GET['action']=='adddriver'){
    $result=$driver->Add( $_POST['name'],$_POST['email'],$_POST['phone'], $_POST['date'], $_POST['photo'], $_POST['status']);
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }

}else if($_GET['action']=='editdriverpage'){

    header("Location:../Views/Pages/Admin/editdrivers.php");
}
else if($_GET['action']=='editdriver'){
    $result=$driver->Edit($_POST['id'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['photo'], $_POST['status']);
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }

}
