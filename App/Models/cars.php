<?php

require "Model.php";
include_once "../App/Database/db.php";

class Car extends Model{
    private $id;
    private $model;
    private $year;
    private $color;
    private $fuelType;
    private $cars;
    private $maintenanceHistory = [];
    protected $db;


    public function __construct($id, $model, $year, $color, $fuelType) {
        $this->id = $id;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->fuelType = $fuelType;
        $this->db = new Dbh(); 
    }

    public function getId() {
        return $this->id;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getColor() {
        return $this->color;
    }

    public function getFuelType() {
        return $this->fuelType;
    }

    public function getcars() {
        return $this->cars;
    }

    public function assignDriver($driver) {
        $this->driver = $driver;
    }

    public function recordMaintenance($maintenanceDetails) {
        $this->maintenanceHistory[] = $maintenanceDetails;
    }

    public function addCar() {
        $sql = "INSERT INTO cars (model, year, color, fuelType) VALUES (?, ?, ?, ?)";
        $params = [$this->model, $this->year, $this->color, $this->fuelType];
        $this->db->execute($sql, $params);
    }

    public function deleteCar() {
        $sql = "DELETE FROM cars WHERE id = ?";
        $params = [$this->id];
        $this->db->execute($sql, $params);
    }

    public function editCar() {
        $sql = "UPDATE cars SET model = ?, year = ?, color = ?, fuelType = ? WHERE id = ?";
        $params = [$this->model, $this->year, $this->color, $this->fuelType, $this->id];
        $this->db->execute($sql, $params);
    }

    function readcars($id)
    {
        $sql = "SELECT * FROM cars where Id=".$id;
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            echo "error";
         }

    }


}

?>
