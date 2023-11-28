<?php
include_once "../../includes/driversdata.php";

class Driver extends User
{
    private $dateofemployment;
    private $status;

    function __construct()
    {

    }
    function getAllDrivers()
    {

    }
    function addDriver($id, $name, $phone, $dateofemployment, $status)
    {
        $sql = "INSERT INTO `drivers` (`ID`, `Name`, `Phone`, `DateOfEmployment`, `Status`) VALUES
        ($id, '$name', $phone ,$dateofemployment ,$status),";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            echo "Driver Added Successfully";
        } else {
            echo "Fee Mashakel";
        }
    }
    function editDriver($id, $name, $phone, $dateofemployment, $status)
    {
        // $sql = "UPDATE `drivers` (`ID`, `Name`, `Phone`, `DateOfEmployment`, `Status`) VALUES
        // ($id, '$name', $phone ,$dateofemployment ,$status),";
        // $sql = "UPDATE drivers SET (`ID`=$id ,`Name`=$name, `Phone`=$phone, )"
        // $result = mysqli_query($GLOBALS['conn'], $sql);
        // if ($result) {
        //     echo "Driver Updated Successfully";
        // } else {
        //     echo "Fee Mashakel";
        // }

    }
    function removeDriver($id)
    {
        $sql = "DELETE FROM drivers WHERE id=$id";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            echo "Driver Deleted Successfully";
        } else {
            echo "Fee Mashakel";
        }
    }
}