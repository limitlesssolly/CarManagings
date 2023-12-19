<?php

require_once("../App/Models/rides.php");
class Booking{

    public function getrides(){
     $rides=new Rides();
    return $rides->GetAllRides(); 
    }
    public function Assigndrivercar($rideID,$driverID, $carID){

    }



  }
  
  ?>

