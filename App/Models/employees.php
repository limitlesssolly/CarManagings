<?php

require_once 'Database.php'; 

class Employee {
    private $employeeId;
    private $firstName;
    private $lastName;
    private $position;
    private $salary;
    private $assignedCars = [];
    private $db;

    public function __construct($employeeId, $firstName, $lastName, $position, $salary) {
        $this->employeeId = $employeeId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->salary = $salary;
        $this->db = new Database(); 
    }

    public function getEmployeeId() {
        return $this->employeeId;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function assignCar($car) {
        $this->assignedCars[] = $car;
    }

    public function getAssignedCars() {
        return $this->assignedCars;
    }

    public function addEmployeeToDatabase($firstName, $lastName, $position, $salary) {
        $sql = "INSERT INTO employees (first_name, last_name, position, salary) VALUES (?, ?, ?, ?)";
        $params = [$firstName, $lastName, $position, $salary];
        $this->db->execute($sql, $params);
    }

    public function editEmployeeInDatabase($employeeId, $firstName, $lastName, $position, $salary) {
        $sql = "UPDATE employees SET first_name = ?, last_name = ?, position = ?, salary = ? WHERE employee_id = ?";
        $params = [$firstName, $lastName, $position, $salary, $employeeId];
        $this->db->execute($sql, $params);
    }

    public function deleteEmployeeFromDatabase($employeeId) {
        $sql = "DELETE FROM employees WHERE employee_id = ?";
        $params = [$employeeId];
        $this->db->execute($sql, $params);
    }
}

?>
