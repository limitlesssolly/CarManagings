<?php
session_start();
require_once("../App/Controllers/CarsController.php");

$carController = new CarController();

if ($_GET['action'] == 'cars') {
    $result = $carController->getCars();
    $_SESSION['AllCars'] = array();

    $i = 0;
    while ($row = $result->fetch_assoc()) {

        $_SESSION['AllCars'][$i] = [
            'ID' => $row['ID'],
            'Model' => $row['Model'],
            'Year' => $row['Year'],
            'Color' => $row['Color'],
            'FuelType' => $row['FuelType'],
        ];
        $i++;
    }

    header("Location: ../Views/Pages/Admin/cars.php");
} else if ($_GET['action'] == 'addcarpage') {
    header("Location: ../Views/Pages/Admin/addcars.php");
} else if ($_GET['action'] == 'addcar') {
    $result = $carController->Add($_POST['id'], $_POST['model'], $_POST['year'], $_POST['color'], $_POST['fuelType']);
    if ($result['success']) {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
} else if ($_GET['action'] == 'editcarpage') {
    header("Location: ../Views/Pages/Admin/editcars.php");
} else if ($_GET['action'] == 'editcar') {
    $result = $carController->Edit($_POST['id'], $_POST['model'], $_POST['year'], $_POST['color'], $_POST['fuelType']);
    if ($result['success']) {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
} else if ($_GET['action'] == 'deletecar') {
    $result = $carController->Delete($_POST['id']);
    if ($result['success']) {
        echo 'successful';
    } else {
        echo 'failed';
    }
}
