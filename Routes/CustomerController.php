<?php
session_start();
require_once("../App/Controllers/AdminConttroller.php");
require_once("../App/Controllers/CustomerController.php"); // Add this line to include the CustomerController

$admin = new AdminController('AdminConttroller');
$customer = new CustomerController('CustomerController'); // Create an instance of CustomerController

if ($_GET['action'] == 'admins') {
    $result = $admin->getAdmins();
    $_SESSION['AllAdmins'] = array();
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $_SESSION['AllAdmins'][$i] = [
            'ID' => $row['ID'],
            'Name' => $row['Name'],
            'Email' => $row['Email'],
            'Phone' => $row['Phone'],
        ];
        $i++;
    }
    header("Location:../Views/Pages/Admin/admins.php");
} else if ($_GET['action'] == 'addadminpage') {
    header("Location:../Views/Pages/Admin/addadmins.php");
} else if ($_GET['action'] == 'addadmin') {
    $result = $admin->Add($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['pass'], $_POST['confirmpass']);
    if ($result == 'successful') {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
} else if ($_GET['action'] == 'deleteadmin') {
    $result = $admin->Delete($_POST['id']);
    if ($result == 'sucessful') {
        echo 'successful';
    } else {
        echo 'failed';
    }
} else if ($_GET['action'] == 'editpage') {
    header("Location:../Views/Pages/Admin/editadmins.php");
} else if ($_GET['action'] == 'customers') {
    // Similar to the admins section, fetch and handle customer data
    $result = $customer->getCustomers();
    $_SESSION['AllCustomers'] = array();
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $_SESSION['AllCustomers'][$i] = [
            'ID' => $row['ID'],
            'Name' => $row['Name'],
            'Email' => $row['Email'],
            'Phone' => $row['Phone'],
        ];
        $i++;
    }
    header("Location:../Views/Pages/Customer/customers.php");
} else if ($_GET['action'] == 'addcustomerpage') {
    // Handle adding customer page redirection
} else if ($_GET['action'] == 'addcustomer') {
    // Handle adding customer data
} else if ($_GET['action'] == 'deletecustomer') {
    // Handle deleting customer data
} else if ($_GET['action'] == 'editcustomerpage') {
    // Handle edit customer page redirection
} else if ($_GET['action'] == 'editcustomer') {
    // Handle editing customer data
}


?>
