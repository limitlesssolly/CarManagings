<?php
require_once("../App/Controllers/UsersControllers.php");

$user=new UsersController('UsersController');

if($_GET['action']=='ratings'){
    $result=$user->getRatings();
    $_SESSION['AllRatings']=array(); 
 
    $i=0; 
    while ($row =$result->fetch_assoc()) {
     
     $_SESSION['AllRatings'][$i]=[
 
         'ID'=>$row['ID'], 
         'Name'=>  $row['name'], 
         'Email'=> $row['email'],  
         'Rating'=> $row['rating'],
         'Review'=> $row['review'],
     ]; 
    $i++; 
    } 
    
    header("Location:../Views/Pages/User/ratings.php");

}
else if($_GET['action']=='ratings'){
    header("Location:../Views/Pages/User/ratings.php");

}
else if($_GET['action']=='rate'){
    $result=$driver->Add( $_POST['name'],$_POST['email'],$_POST['phone'], $_POST['date'], $_POST['photo'], $_POST['status']);
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }

}
