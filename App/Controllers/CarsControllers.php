<?php
require "Controller.php";
require_once("../App/Models/cars.php");
class CarController
{
    public function addCar($id, $model, $year, $color, $fuelType)
    {
        try {
            $car = new Car($id, $model, $year, $color, $fuelType);
            $car->addCar();
            return ['success' => true, 'message' => 'Car added successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function deleteCar($id)
    {
        try {
            $car = new Car($id, '', '', '', ''); // Assuming you only need ID for deletion
            $car->deleteCar();
            return ['success' => true, 'message' => 'Car deleted successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function editCar($id, $model, $year, $color, $fuelType)
    {
        try {
            $car = new Car($id, $model, $year, $color, $fuelType);
            $car->editCar();
            return ['success' => true, 'message' => 'Car edited successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}

// Example usage:
$carController = new CarController();

// Add a car
$result = $carController->addCar(1, 'CarModel', 2022, 'Red', 'Petrol');
if ($result['success']) {
    echo $result['message'];
} else {
    echo 'Error: ' . $result['message'];
}

// Delete a car
$result = $carController->deleteCar(1);
if ($result['success']) {
    echo $result['message'];
} else {
    echo 'Error: ' . $result['message'];
}

// Edit a car
$result = $carController->editCar(1, 'UpdatedModel', 2023, 'Blue', 'Diesel');
if ($result['success']) {
    echo $result['message'];
} else {
    echo 'Error: ' . $result['message'];
}
?>