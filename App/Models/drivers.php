<?php
define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_DATABASE', "24sevenlimousine");
class DBh{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	private $conn;
	private $result;
	public $sql;

	function __construct() {
		$this->servername = DB_SERVER;
		$this->username = DB_USER;
		$this->password = DB_PASS;
		$this->dbname = DB_DATABASE;
		$this->connect();
	}

	public function connect(){
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
		return $this->conn;
	}

	public function getConn(){
		return $this->conn;
	}

	function query($sql){
		if (!empty($sql)){
			$this->sql = $sql;
			$this->result = $this->conn->query($sql);
			return $this->result;
		}
		else{
			return false;
		}
	}

	function fetchRow($result=""){
		if (empty($result)){ 
			$result = $this->result; 
		}
		return $result->fetch_assoc();
	}

	function __destruct(){
		$this->conn->close();
	}
}
abstract class Model{
    protected $db;
    protected $conn;

    public function connect(){
        if(null === $this->conn ){
            $this->db = new Dbh();
        }
        return $this->db;
    }
}

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
    function editDriver($name,$email, $phone, $dateofemployment, $status)
    {
        $sql = "update drivers set name='$name',email='$email', phone='$phone', date='$dateofemployment', status='$status' where id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "updated successfully.";
            $this->readDriver($this->id);
        } else {
            echo "Fee mashakel";
        }

    }
    function removeDriver()
    {
        $sql = "DELETE FROM drivers WHERE id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "Driver Deleted Successfully";
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