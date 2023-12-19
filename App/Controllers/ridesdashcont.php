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

      return $this->Assigndrivercar($rideID,$driverID, $carID);      


    }



  }
  
  ?>

