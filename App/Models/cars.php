<?php

require "Model.php";
include_once "../App/Database/db.php";

class Car {
    private $id;

    public $CarName;
    public $Cartype;
    public $CarPlate;
    public $color;
    public $Status;
    public $AssignedDriver;
    public $CarHistory = [];
    public $relation;
    public function __construct(){

    }
    // public function __construct($id, $model, $year, $color, $fuelType) {
    //     $this->id = $id;
    //     $this->model = $model;
    //     $this->year = $year;
    //     $this->color = $color;
    // }

    public function getId() {
        return $this->id;
    }

    public function getCartype() {
        return $this->Cartype;
    }



    public function getStatus() {
        return $this->Status;
    }


    public function getCarName() {
        return $this->CarName;
    }

    public function getAllCars() {
        $sql = "SELECT * FROM cars";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            echo "error";
         }
    }

 
    public function addCar($details) {
        $this->CarName = $details['name'];
        $this->Cartype = $details['type'];
        $this->CarPlate = $details['plate'];
        $this->color = $details['color'];
        $this->Status = $details['status'];
        $sql = "INSERT INTO Cars (CarName,CarType,Status,CarPlate,Colour) VALUES ('$this->CarName' ,'$this->Cartype' ,'$this->Status',' $this->CarPlate'
        , '$this->color')";

        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'true';
         }
         else{
            echo "error";
         }


    }
    function readCar($id)
    {
        $sql = "SELECT * FROM Cars where ID=".$id;
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            echo "error";
         }

    }
    public function deleteCar($id) {
        $sql = "DELETE FROM Cars WHERE id = '$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            echo "error";
         }
    }

    public function EditCar($details) {
        $id=$details["id"];
        $newname=$details['name'];
        $newtype=$details['type'];
        $newplate=$details['plate'];
        $newcolor=$details['color'];
        $newstatus=$details['status'];

        $sql = "UPDATE Cars  SET CarName='$newname',CarType='$newtype', CarPlate='$newplate',colour='$newcolor', Status='$newstatus' where ID='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            echo "error";
         }
    }

    // function readcars($id)
    // {
    //     $sql = "SELECT * FROM cars where Id=".$id;
    //     $result = mysqli_query($GLOBALS['conn'], $sql);
    //     if ($result) {
    //         return $result;
    //      }
    //      else{
    //         echo "error";
    //      }

    // }


}

?>
