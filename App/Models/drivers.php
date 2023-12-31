<?php

require "Model.php";
include_once "../App/Database/db.php";
class Driver extends Model
{
    protected $id;
    protected $name;
    protected $email;
    protected $phone;
    private $dateofemployment;
    private $status;
    private $drivers;

    function __construct()
    {
        // $id , $name = "", $email = "", $phone = "", $dateofemployment = "", $status = ""  constructor parameters
        // $this->id = $id;
        // $this->db = $this->connect();

        // if ("" === $name) {
        //     $this->readDriver($id);
        // } else {
        //     $this->name = $name;
        //     $this->email = $email;
        //     $this->phone = $phone;
        //     $this->dateofemployment = $dateofemployment;
        //     $this->status = $status;
        // }
    }

    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        return $this->name = $name;
    }

    function getEmail()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        return $this->email = $email;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function setPhone($phone)
    {
        return $this->phone = $phone;
    }
    function getDate()
    {
        return $this->dateofemployment;
    }
    function setDate($dateofemployment)
    {
        return $this->dateofemployment = $dateofemployment;
    }
    function getStatus()
    {
        return $this->status;
    }
    function setStatus($status)
    {
        return $this->status = $status;
    }

    function getID()
    {
        return $this->id;
    }
    function getDrivers() {
		return $this->drivers;
	}
    function fillArray() {
		$this->drivers = array();
		$this->db = $this->connect();
		$result = $this->readDrivers();
		while ($row = $result->fetch_assoc()) {
			// array_push($this->drivers, new Driver($row["ID"],$row["name"],$row["email"],$row["phone"],$row["date"],$row["status"]));
		}
	}


	public function readDrivers(){
		$sql = "SELECT * FROM drivers";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            echo "error";
         }
	}

    function addDriver($name,$email, $phone, $date, $status, $img)
    {
        $sql = "INSERT INTO drivers (Name, Email, Phone, dateofemployment , status , img) VALUES ('$name','$email', '$phone', '$date', '$status','$img')";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 0;
         }
         else{
            echo "error";
         }
    }
    function editDriver($id,$name,$email, $phone,$img, $status)
    {
        $sql = "UPDATE drivers  SET Name='$name',Email='$email', Phone='$phone',img='$img', status='$status' where ID='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'true';
         }
         else{
            echo "error";
         }
        
    }
    function removeDriver($id)
    {
        $sql = "DELETE FROM drivers WHERE id='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'sucessful';
         }
         else{
            echo "error";
         }
    }
    
    function readDriver($id)
    {
        $sql = "SELECT * FROM drivers where ID=".$id;
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            echo "error";
         }

    }

}