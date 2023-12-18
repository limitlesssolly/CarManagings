<?php
require "Controller.php";
require_once("../app/models/cars.php");

class CarController {
    public function addCar($name, $type, $plate, $status, $category, $totalProfit) {
        try {
            $car = new Car(0, $name, $type, $plate, $status, $category, $totalProfit);
            $car->addCar();
            return ['success' => true, 'message' => 'Car added successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function getCars() {
        try {
            $car = new Car(0, '', '', '', '', '', 0);
            $cars = $car->getCars();
            return ['success' => true, 'cars' => $cars];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function deleteCar($id) {
        try {
            $car = new Car($id, '', '', '', '', '', 0);
            $car->deleteCar();
            return ['success' => true, 'message' => 'Car deleted successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function editCar($id, $name, $type, $plate, $status, $category, $totalProfit) {
        try {
            $car = new Car($id, $name, $type, $plate, $status, $category, $totalProfit);
            $car->editCar();
            return ['success' => true, 'message' => 'Car edited successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}

// Example usage:
/*
$carController = new CarController();

// Add a car
$result = $carController->addCar('CarName', 'CarType', 'CarPlate', 'CarStatus', 'CarCategory', 500.0);
if ($result['success']) {
    echo $result['message'];
} else {
    echo 'Error: ' . $result['message'];
}

// Get all cars
$carsResult = $carController->getCars();
if ($carsResult['success']) {
    print_r($carsResult['cars']);
} else {
    echo 'Error: ' . $carsResult['message'];
}

// Delete a car
$deleteResult = $carController->deleteCar(1);
if ($deleteResult['success']) {
    echo $deleteResult['message'];
} else {
    echo 'Error: ' . $deleteResult['message'];
}

// Edit a car
$editResult = $carController->editCar(2, 'UpdatedCar', 'UpdatedType', 'UpdatedPlate', 'UpdatedStatus', 'UpdatedCategory', 700.0);
if ($editResult['success']) {
    echo $editResult['message'];
} else {
    echo 'Error: ' . $editResult['message'];
}
*/

?>
