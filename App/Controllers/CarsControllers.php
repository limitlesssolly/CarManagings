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

    public function getCars() {
        try {
            return $this->car->getAllCars();
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function deleteCar($id) {
        
            
                  
            return  $this->car->deleteCar($id);
     
    }

    public function editCar($details) {

        $i=0;
        if($details['id'] == null)
        {
           $i++;
           return 'please enter id';

        }else{
        

       $carinfo =$this->car->readCar($details['id']);
       while ($row = $carinfo->fetch_assoc()) {
    
           if($details['name']==''){
            $details['name']=$row['CarName'];
           }

           if($details['type']==''){
            $details['type']=$row['CarType'];
            }

            if($details['plate']==''){
                $details['plate']=$row['CarPlate'];
            }

            if($details['color']==''){
                $details['color']= $row['Colour'];
            }
            if($details['status']==''){
                $details['status']= $row['Status'];
            }
            $this->car->EditCar($details);
            return	'successful';
          } 
         return 'not found';
        }
    }

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
