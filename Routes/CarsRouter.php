<?php
session_start();
require_once("../app/Controllers/CarsControllers.php");

$carController = new CarController();

if ($_GET['action'] == 'cars') {
    $result = $carController->getCars();

    $_SESSION['Alldrivers']=array(); 
 
    $i=0; 
    while ($row =$result->fetch_assoc()) {
     
     $_SESSION['AllCars'][$i]=[
 
         'ID'=>$row['ID'], 
         'CarName'=>  $row['CarName'] , 
         'CarType'=>  $row['CarType'] , 
         'CarPlate'=> $row['CarPlate'],  
         'Status'=> $row['Status']  ,
         'AssignedDriver'=> $row['AssignedDriver'] ,
         'Colour'=>  $row['Colour'] ,
     ]; 
    $i++; 
    } 

    header("Location: ../Views/Pages/Admin/carshowdash.php");
         

} else if ($_GET['action'] == 'addcarpage') {
    header("Location: ../Views/Pages/Admin/addCar.php");
} else if ($_GET['action'] == 'addcar') {

    
    $details=[
        'name'=>$_POST['name'],
        'type'=>$_POST['type'],
        'plate'=>$_POST['plate'],
        'color'=>$_POST['color'],
        'status'=>$_POST['status']
    ];
    
    $result = $carController->addCar($details);
     
    if ($result=='successful') {

        echo 'successful';
    } else {
        echo json_encode($result);
    }

 }

 else if ($_GET['action'] == 'editcarpage') {
    header("Location: ../Views/Pages/Admin/editCar.php");
} else if ($_GET['action'] == 'editcar') {

    $details=[
        'id'=>$_POST['id'],
        'name'=>$_POST['name'],
        'type'=>$_POST['type'],
        'plate'=>$_POST['plate'],
        'color'=>$_POST['color'],
        'status'=>$_POST['status']
    ];

    $result = $carController->editCar($details);
    if ($result=='successful') {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
}
//  else if ($_GET['action'] == 'deletecar') {
//     $result = $carController->Delete($_POST['id']);
//     if ($result['success']) {
//         echo 'successful';
//     } else {
//         echo 'failed';
//     }
// }
