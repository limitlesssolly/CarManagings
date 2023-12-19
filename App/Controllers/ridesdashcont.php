<?php

require_once("../App/Models/rides.php");
class Booking{

    public $ride;

    public function __construct() {
     $this->ride=new  Rides();
    }
    public function getrides(){
    return $this->ride->GetAllRides(); 
    }
    public function Assigndrivercar($rideID,$driverID, $carID){

      return $this->ride->AssignDriverandCar($rideID,$driverID, $carID);      

    }
    public function CancelRide($id){
      return $this->ride->CancelRide($id);
    }
    public function editRide($rideid,$carid, $driverID, $status){

      return $this->ride->editRide($rideid,$carid, $driverID, $status);

    }


  }
  
  ?>

