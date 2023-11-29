<?php

require_once("../Models/employees.php");

$employee = new Employee();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $position = htmlspecialchars($_POST["position"]);
    $salary = htmlspecialchars($_POST["salary"]);
}

if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["employeeId"])) {
                $employee->addEmployee($_GET["employeeId"], $firstName, $lastName, $position, $salary);
            }
            break;
        case "remove":
            $employee->removeEmployee($_GET["employeeId"]);
            break;
    }
}



?>
