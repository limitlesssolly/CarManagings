<?php
	session_start();
    include_once "../../includes/db.php";
    $email=$_SESSION['Email'];
    $sql="delete from users where Email=".$email;
    $result=mysqli_query($conn,$sql);
    if($result){
        session_destroy();
        header("Location:index.php");
    }

?>