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
    $result = $carController->addCar($_POST['name'], $_POST['type'], $_POST['plate'], $_POST['status'], $_POST['category'], $_POST['totalProfit']);
    if ($result['success']) {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
} else if ($_GET['action'] == 'editcarpage') {
    header("Location: ../Views/Pages/Admin/editcars.php");
} else if ($_GET['action'] == 'editcar') {
    $result = $carController->editCar($_POST['id'], $_POST['name'], $_POST['type'], $_POST['plate'], $_POST['status'], $_POST['category'], $_POST['totalProfit']);
    if ($result['success']) {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
} else if ($_GET['action'] == 'deletecar') {
    $result = $carController->deleteCar($_POST['id']);
    if ($result['success']) {
        echo 'successful';
    } else {
        echo 'failed';
    }
}
?>
