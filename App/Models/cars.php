<?php

require "Model.php";
include_once "../App/Database/db.php";

class Car extends Model{
    private $id;
    private $name; // Updated attribute
    private $type; // Updated attribute
    private $plate; // Updated attribute
    private $status; // Updated attribute
    private $category; // Updated attribute
    private $totalProfit; // Updated attribute
    private $cars;
    private $maintenanceHistory = [];
    protected $db;

    public function __construct($id, $name, $type, $plate, $status, $category, $totalProfit) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->plate = $plate;
        $this->status = $status;
        $this->category = $category;
        $this->totalProfit = $totalProfit;
        $this->db = new Dbh(); 
    }
    // Getters for the updated attributes
    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getPlate() {
        return $this->plate;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getTotalProfit() {
        return $this->totalProfit;
    }

    public function assignDriver($driver) {
        $this->driver = $driver;
    }

    public function recordMaintenance($maintenanceDetails) {
        $this->maintenanceHistory[] = $maintenanceDetails;
    }

    public function addCar() {
        $sql = "INSERT INTO cars (name, type, plate, status, category, totalProfit) VALUES (?, ?, ?, ?, ?, ?)";
        $params = [$this->name, $this->type, $this->plate, $this->status, $this->category, $this->totalProfit];
        $this->db->execute($sql, $params);
    }

    public function deleteCar() {
        $sql = "DELETE FROM cars WHERE id = ?";
        $params = [$this->id];
        $this->db->execute($sql, $params);
    }
    public function getCars() {
        $sql = "SELECT * FROM cars";
        $result = $this->db->query($sql);
        if (!$result) {
            die("Error: " . $this->db->getErrorMessage()); // Print the error message
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function editCar() {
        $sql = "UPDATE cars SET name = ?, type = ?, plate = ?, status = ?, category = ?, totalProfit = ? WHERE id = ?";
        $params = [$this->name, $this->type, $this->plate, $this->status, $this->category, $this->totalProfit, $this->id];
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
