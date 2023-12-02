<?php

require "Model.php";

class Driver extends Model
{
    protected $id;
    protected $name;
    protected $email;
    protected $phone;
    private $dateofemployment;
    private $status;
    private $drivers;

    function __construct($id, $name = "", $email = "", $phone = "", $dateofemployment = "", $status = "")
    {
        $this->id = $id;
        $this->db = $this->connect();

        if ("" === $name) {
            $this->readDriver($id);
        } else {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->dateofemployment = $dateofemployment;
            $this->status = $status;
        }
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
    function getAllDrivers()
    {

    }
    function getDrivers() {
		return $this->drivers;
	}
    function fillArray() {
		$this->drivers = array();
		$this->db = $this->connect();
		$result = $this->readDrivers();
		while ($row = $result->fetch_assoc()) {
			array_push($this->drivers, new Driver($row["ID"],$row["name"],$row["email"],$row["phone"],$row["date"],$row["status"]));
		}
	}

	function readDrivers(){
		$sql = "SELECT * FROM drivers";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}
    function addDriver($name,$email, $phone, $dateofemployment, $status)
    {
        $sql = "INSERT INTO drivers (name, email, phone, date,status) VALUES ('$name','$email', '$phone', '$dateofemployment', '$status')";
		if($this->db->query($sql) === true){
			echo "Driver inserted successfully.";
			$this->fillArray();
		} else {
            echo "Fee Mashakel";
        }
    }
    function editDriver($name,$email, $phone, $status)
    {
        $sql = "UPDATE drivers SET name='$name',email='$email', phone='$phone', status='$status'";
        if ($this->db->query($sql) === true) {
            echo "updated successfully.";
        } else {
            echo "Fee mashakel";
        }

    }
    function removeDrivers()
    {
        $sql = "DELETE FROM drivers WHERE id=$this->id; ";
        if ($this->db->query($sql) === true) {
            echo "Drivers Deleted Successfully";
        } else {
            echo "Fee Mashakel";
        }
    }

    function readDriver($id)
    {
        $sql = "SELECT * FROM drivers where ID=" . $id;
        $db = $this->connect();
        $result = $db->query($sql);
        if ($result->num_rows == 1) {
            $row = $db->fetchRow();
            $this->name = $row["Name"];
            $_SESSION["Name"] = $row["Name"];
            $this->email = $row["Email"];
            $this->phone = $row["Phone"];
        } else {
            $this->name = "";
            $this->email = "";
            $this->phone = "";
        }
    }
}