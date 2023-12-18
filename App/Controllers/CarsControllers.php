<?php
require "Controller.php";
require_once("../App/Models/cars.php");
class CarController
{
    public $car;
    public function __construct() {
     $this->car=new  Car();
    }
    public function addCar($details)
    {
        $error=[
            'name'=>'',
            'type'=>'',
            'plate'=>'',
            'color'=>'',
			'status'=>'',

        ];
       
        $i=0;
        if($details['name'] =='' ){
            $i++;
            $error['name']='please enter a name';
        }
        if($details['plate'] =='' ){
            $i++;
            $error['plate']='please enter car plate';
        }
        if($details['color'] =='' ){
            $i++;
            $error['color']='please enter car color';
        }
        if($details['status'] =='' ){
            $i++;
            $error['status']='please enter car status';
        }


		if($i==0)
		{
 
                $updatedetails=[
                    'name'=>$details['name'],
                    'type'=>$details['type'],
                    'plate'=>$details['plate'],
                    'color'=>$details['color'],
                    'status'=>$details['status']
                ];
                $this->car->addCar($updatedetails);
			return 'successful';
		}else{
			return $error;
		}
    }

    // public function getCars() {
    //     try {
    //         $car = new Car(0, '', '', '', '', '', 0);
    //         $cars = $car->getCars();
    //         return ['success' => true, 'cars' => $cars];
    //     } catch (Exception $e) {
    //         return ['success' => false, 'message' => $e->getMessage()];
    //     }
    // }

    // public function deleteCar($id) {
    //     try {
    //         $car = new Car($id, '', '', '', '', '', 0);
    //         $car->deleteCar();
    //         return ['success' => true, 'message' => 'Car deleted successfully'];
    //     } catch (Exception $e) {
    //         return ['success' => false, 'message' => $e->getMessage()];
    //     }
    // }

    // public function editCar($id, $name, $type, $plate, $status, $category, $totalProfit) {
    //     try {
    //         $car = new Car($id, $name, $type, $plate, $status, $category, $totalProfit);
    //         $car->editCar();
    //         return ['success' => true, 'message' => 'Car edited successfully'];
    //     } catch (Exception $e) {
    //         return ['success' => false, 'message' => $e->getMessage()];
    //     }
    // }

}

// Example usage:
/*
$carController = new CarController();

// Add a car
if ($result['success']) {
    echo $result['message'];
} else {

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
