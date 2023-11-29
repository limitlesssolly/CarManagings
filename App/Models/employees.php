<?php

class Employee {
    private $employeeId;
    private $firstName;
    private $lastName;
    private $position;
    private $salary;
    private $assignedCars = [];

    public function __construct($employeeId, $firstName, $lastName, $position, $salary) {
        $this->employeeId = $employeeId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->salary = $salary;
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

    
   

}

