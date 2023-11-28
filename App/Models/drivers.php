<?php 
include_once "../../includes/driversdata.php";

class Driver extends User
{
    private $dateofemployment;
    private $status;

    function __construct() {
        
	}
    function getAllDrivers(){

    }
    function addDriver($id,$name,$email,$phone,$dateofemployment,$status){
        $sql = "INSERT INTO `drivers` (`ID`, `Name`, `Email`, `Phone`, `DateOfEmployment`, `Status`) VALUES
        ($id, '$name', '$email', $phone ,$dateofemployment ,$status),";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            echo "Driver Added Successfully";
         }
         else{
            echo "Fee Mashakel";
         }
    }
    function removeDriver($id){

    }
}