<?php

class Car {
    private $id; 
    private $model;
    private $year;
    private $color;
    private $fuelType;
    private $driver; 
    private $maintenanceHistory = [];

    public function __construct($id, $model, $year, $color, $fuelType) {
        $this->id = $id;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->fuelType = $fuelType;
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

    public function getMaintenanceHistory() {
        return $this->maintenanceHistory;
    }

}



?>
