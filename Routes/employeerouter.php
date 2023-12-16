<?php
session_start();
require_once("../App/Controllers/EmployeeController.php");

$employee = new EmployeeController('EmployeeController');

if ($_GET['action'] == 'employees') {
    $result = $employee->getEmployees();
    $_SESSION['AllEmployees'] = array();
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $_SESSION['AllEmployees'][$i] = [
            'ID' => $row['ID'],
            'Name' =>  $row['Name'],
            'Email' => $row['Email'],
            'Phone' => $row['Phone'],
        ];
        $i++;
    }
    header("Location:../Views/Pages/Employee/employees.php");
} else if ($_GET['action'] == 'addemployeepage') {
    header("Location:../Views/Pages/Employee/addemployees.php");
} else if ($_GET['action'] == 'addemployee') {
    $result = $employee->Add($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['pass'], $_POST['confirmpass']);
    if ($result == 'successful') {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
} else if ($_GET['action'] == 'deleteemployee') {
    $result = $employee->Delete($_POST['id']);
    if ($result == 'successful') {
        echo 'successful';
    } else {
        echo 'failed';
    }
} else if ($_GET['action'] == 'editpage') {
    header("Location:../Views/Pages/Employee/editemployees.php");
}


?>
