<?php
session_start();
require_once("../App/Controllers/AdminConttroller.php");

$admin=new AdminController('AdminConttroller');
 if($_GET['action']=='admins'){
    $result=$admin->getAdmins();
    $_SESSION['AllAdmins']=array(); 
    $i=0; 
    while ($row =$result->fetch_assoc()) {
        $_SESSION['AllAdmins'][$i]=[
         'ID'=>$row['ID'], 
         'Name'=>  $row['Name'], 
         'Email'=> $row['Email'],  
         'Phone'=> $row['Phone'],
     ]; 
    $i++; 
    }   
    header("Location:../Views/Pages/Admin/admins.php");
}

else if($_GET['action']=='addadminpage'){
    header("Location:../Views/Pages/Admin/addadmins.php");
}
else if($_GET['action']=='addadmin'){
    $result=$admin->Add($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['pass'], $_POST['confirmpass']);
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




else if($_GET['action']=='editpage'){
    header("Location:../Views/Pages/Admin/editprofiledash.php");
}
else if($_GET['action']=='editadmin'){
    $result=$admin->Edit($_POST['ID'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['pass']);
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }
}
// else if($_GET['action']=='editdriver'){
//     $result=$driver->Edit($_POST['id'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['photo'], $_POST['status']);
//     if($result=='successful')
//     {
//         echo 'successful';
//     }else{
//         echo json_encode($result);
//     }

// }else if($_GET['action']=='deletedriver'){

//     $result=$driver->Delete($_POST['id']);
//     if($result=='sucessful'){
//         echo 'successful';
//     }else{
//         echo 'failed';
//     }

// }



