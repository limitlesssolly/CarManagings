<?php

require_once("Controllers/UsersControllers.php");

$user=new UsersController('UsersController');

if (isset($_POST["submit"])){
    $result=$user->addRating();
    if($result=='successful')
    {
        echo 'successful';
    }else{
        echo json_encode($result);
    }
}