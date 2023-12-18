<?php
session_start();
require_once("../app/Controllers/CarsControllers.php");

$carController = new CarController();

if ($_GET['action'] == 'cars') {
    $result = $carController->getCars();

    if ($result['success']) {
        $_SESSION['AllCars'] = $result['cars'];
        header("Location: ../Views/Pages/Admin/Cars/carshowdash.php");
        exit; // Ensure no further execution after redirection
    } else {
        echo 'Error: ' . $result['message'];
    }
} else if ($_GET['action'] == 'addcarpage') {
    header("Location: ../Views/Pages/Admin/addcars.php");
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

//  else if ($_GET['action'] == 'editcarpage') {
//     header("Location: ../Views/Pages/Admin/editcars.php");
// } else if ($_GET['action'] == 'editcar') {
//     $result = $carController->Edit($_POST['id'], $_POST['model'], $_POST['year'], $_POST['color'], $_POST['fuelType']);
//     if ($result['success']) {
//         echo 'successful';
//     } else {
//         echo json_encode($result);
//     }
// } else if ($_GET['action'] == 'deletecar') {
//     $result = $carController->Delete($_POST['id']);
//     if ($result['success']) {
//         echo 'successful';
//     } else {
//         echo 'failed';
//     }
// }
