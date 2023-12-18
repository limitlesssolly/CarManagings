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


    public function getColor() {
        return $this->color;
    }

    public function getCarName() {
        return $this->CarName;
    }

    public function getAllCars() {
        // return $this->cars;
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

    // public function deleteCar() {
    //     $sql = "DELETE FROM cars WHERE id = ?";
    //     $params = [$this->id];
    //     $this->db->execute($sql, $params);
    // }

    // public function editCar() {
    //     $sql = "UPDATE cars SET model = ?, year = ?, color = ?, fuelType = ? WHERE id = ?";
    //     $params = [$this->model, $this->year, $this->color, $this->fuelType, $this->id];
    //     $this->db->execute($sql, $params);
    // }

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
