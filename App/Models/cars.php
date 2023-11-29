<?php

require_once 'Database.php';

class Car {
    private $id;
    private $model;
    private $year;
    private $color;
    private $fuelType;
    private $driver;
    private $maintenanceHistory = [];
    private $db;

    public function __construct($id, $model, $year, $color, $fuelType) {
        $this->id = $id;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->fuelType = $fuelType;
        $this->db = new Database(); 
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

    public function getDriver() {
        return $this->driver;
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

}

?>
