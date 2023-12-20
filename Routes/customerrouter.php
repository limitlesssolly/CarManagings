<?php
session_start();
require_once("../App/Controllers/CustomerController.php");

$customer = new CustomerController();

if ($_GET['action'] == 'customers') {
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
    header("Location:../Views/Pages/Admin/Customers/customers.php");
} else if ($_GET['action'] == 'addcustomerpage') {
    header("Location:../Views/Pages/Admin/Customers/addcustomers.php");
} else if ($_GET['action'] == 'addcustomer') {
    $result = $customer->Add($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['pass'], $_POST['confirmpass']);
    if ($result == 'successful') {
        echo 'successful';
    } else {
        echo json_encode($result);
    }
} else if ($_GET['action'] == 'deletecustomer') {
    $result = $customer->Delete($_POST['id']);
    if ($result == 'successful') {
        echo 'successful';
    } else {
        echo 'failed';
    }
} else if ($_GET['action'] == 'editcustomer') {
    header("Location:../Views/Pages/Admin/Customers/editcustomers.php");
} else if ($_GET['action'] == 'editcustomer') {
    $result=$customer->Edit($_POST['ID'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['pass']);
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }
}


?>
