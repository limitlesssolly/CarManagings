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

class User extends Model
{
    protected $id;
    protected $name;
    // protected $type;
    protected $email;
    protected $password;
    protected $phone;

    function __construct($name = "", $email = "", $phone = "", $password = "")
    {
        $this->db = $this->connect();
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->password = $password;
        
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
    function getPass()
    {
        return $this->password;
    }
    function setPass($password)
    {
        return $this->password = $password;
    }


    function getID()
    {
        return $this->id;
    }
    function getAllUsers()
    {

    }
    function getUser() {
		return $this->users;
	}
    function fillArray() {
		$this->users = array();
		$this->db = $this->connect();
		$result = $this->readUsers();
		while ($row = $result->fetch_assoc()) {
			array_push($this->users, new User($row["Name"],$row["Email"],$row["Phone"],$row["Pass"]));
		}
	}

	function readUsers(){
		$sql = "SELECT * FROM users";
		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}
    public function insert($name,$email,$phone,$password)
{
        $sql = "INSERT INTO users (Name, Email, Phone,Pass) VALUES ('$name','$email','$phone','$password')";
        if($this->db->query($sql) === true){
			echo "successfull";
			$this->fillArray();
		} else {
            echo "Error";
        }
    }
    function readUser($email)
    {
        $sql = "SELECT * FROM users where Email=" . $email;
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
    function editUser($name,$email,$password,$phone){
        $sql = "update user set Name='$name',Email='$email', Pass='$password', Phone='$phone' where id=$this->id;";
          if($this->db->query($sql) === true){
              echo "updated successfully.";
              $this->readUser($this->id);
          } else{
              echo "ERROR: Could not able to execute $sql. " ;
          }
  
    }
    
    function deleteUser(){
        $sql="delete from user where email=$this->email;";
        if($this->db->query($sql) === true){
              echo "deletet successfully.";
          } else{
              echo "ERROR: Could not able to execute $sql. ";
          }
      }
}
?>




