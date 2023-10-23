<?php
	session_start();
    include_once "includes/dbh.inc.php";

    
    $id=$_SESSION['ID'];
    $sql="delete from users where id=".$id;
    $result=mysqli_query($conn,$sql);
    if($result){
        session_destroy();
        header("Location:index.php");
    }

?>