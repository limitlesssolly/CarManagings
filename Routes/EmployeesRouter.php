<?php
session_start();
require_once("../App/Controllers/EmployeesControllers.php");

$employee=new  EmployeesController();
 if($_GET['action']=='employees'){
    $result=$employee->getEmployees();
    $_SESSION['AllEmployees']=array(); 
    $i=0; 
    while ($row =$result->fetch_assoc()) {
        $_SESSION['AllEmployees'][$i]=[
         'ID'=>$row['ID'], 
         'Name'=>  $row['Name'], 
         'Email'=> $row['Email'],  
         'Phone'=> $row['Phone'],
     ]; 
    $i++; 
    }   
    header("Location:../Views/Pages/Admin/employees.php");
}

else if($_GET['action']=='addemployeepage'){
    header("Location:../Views/Pages/Admin/addemployee.php");
}
else if($_GET['action']=='addemployee'){

    $result=$employee->Add($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['pass'], $_POST['confirmpass']);
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }
}
else if($_GET['action']=='deleteadmin'){

    $result=$admin->Delete($_POST['id']);
    if($result=='sucessful'){

        echo 'successful';
    }else{
        echo 'failed';
    }
}

else if($_GET['action']=='editemployeepage'){
    header("Location:../Views/Pages/Admin/editemployees.php");
}
else if($_GET['action']=='editemployee'){


    $result=$employee->Edit($_POST['id'], $_POST['name'],$_POST['email'],$_POST['phone'],$_POST['pass'],$_POST['confirmpass']);
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }
}




