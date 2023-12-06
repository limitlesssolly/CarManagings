<?php
session_start();
require_once("../App/Controllers/booking.php");

$book=new Booking();
if($_GET['action']=='firstvalidation'){
    $result = $book->firstvalidation($_POST['start'],$_POST['end'],$_POST['distance'],$_POST['date'],$_POST['time']);
    
    if($result =='successful'){
        
        $_SESSION['ride']= [
            'start'=> $_POST['start'],
            'end'=> $_POST['end'],
            'distance'=> $_POST['distance'],
            'date'=>$_POST['date'],
            'time'=> $_POST['time'],
            'cartype'=>'',
            'username'=>'',
            'usermail'=>'',
            'comment'=>'',
            'phone'=>'',
            'payment'=>'',
        ];
        echo 'successful';
    }else{
        echo json_encode($result);
    }
}
if($_GET['action']=='sedan'){
   
    $_SESSION['ride']['cartype']='sedan';
    header("Location:../Views/Pages/infodetails.php");
}    
else if($_GET['action']=='suv'){
    
    $_SESSION['ride']['cartype']='suv';
    header("Location:../Views/Pages/infodetails.php");
}else if($_GET['action']=='hiace'){
    
    $_SESSION['ride']['cartype']='hiace';
    header("Location:../Views/Pages/infodetails.php");
}  

if($_GET['action']=='secondvalidation'){
    $comm='';
    if(isset($_POST['comment']) != null){
        $comm=$_POST['comment'];
    }else{
        $comm='no comment';
    }
    $result = $book->secondvalidation($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['cash'],$_POST['fawry'],$comm);
    if($result =='successful'){
        
        $_SESSION['ride']['username']=$_POST['name'];
        $_SESSION['ride']['useremail']=$_POST['email'];
        $_SESSION['ride']['phone']=$_POST['phone'];
        if(isset($_POST['comment']) != null){
            $_SESSION['ride']['comment']=$_POST['comment'];
        }
       
        if($_POST['cash'] == 'true')
        {
            $_SESSION['ride']['payment']='Pay to Captain';
        }else{
            $_SESSION['ride']['payment']='Fawry';
        }
        
        echo 'successful';
       
    }else{
        echo json_encode($result);
    }
}





?>