<?php
require_once "../../../Views/View.php";
require "Model.php";
include_once "../../../App/Database/db.php";
include_once "../../../App/Database/Dbh.php";
class User extends Model {
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $phone;
    private $users;
    function __construct($name = "", $email = "", $phone = "", $password = "") {
        $this->db = $this->connect();
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;

    }
    function setID($id) {
        return $this->id = $id;
    }
    function getID() {
        return $this->id;
    }
    function setName($name) {
        return $this->name = $name;
    }
    function getName() {
        return $this->name;
    }
    function getEmail() {
        return $this->email;
    }
    function setEmail($email) {
        return $this->email = $email;
    }
    function getPhone() {
        return $this->phone;
    }
    function setPhone($phone) {
        return $this->phone = $phone;
    }
    function getPass() {
        return $this->password;
    }
    function setPass($password) {
        return $this->password = $password;
    }

    function getUser() {
        return $this->users;
    }
    function fillArray() {
        $this->users = array();
        $this->db = $this->connect();
        $result = $this->readUsers();
        while($row = $result->fetch_assoc()) {
            array_push($this->users, new User($row["Name"], $row["Email"], $row["Phone"], $row["Pass"]));
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
    public function insert($name,$email,$phone,$password) {
        $sql = "INSERT INTO users (Name,Email,Phone,Pass) VALUES ('$name','$email','$phone','$password')";
        if($this->db->query($sql) === true){
			echo "successfull";
			$this->fillArray();
		} else {
            echo "error";
 
        }
    }
        function readUser($id){
		$id=$_SESSION["id"];
        $sql = "SELECT * FROM `users` WHERE id=$id";
        $dbh = new Dbh();
        $result = $dbh->query($sql);
        if ($result->num_rows == 1){
            $row = $dbh->fetchRow($result);
            $this->name = $row["Name"];
            $_SESSION["Name"] = $row["Name"];
            $this->email = $row["Email"];
            $_SESSION["Email"] = $row["Email"];
            $this->phone = $row["Phone"];
            $_SESSION["Phone"] = $row["Phone"];
            $this->password = $row["Pass"];
            $_SESSION["Password"] = $row["Pass"];
                $this->fillArray();
        }
        else {
            $this->name = "";
            $this->password="";
            $this->age = "";
            $this->phone = "";
        }
      }
      
    function editUser($id,$name,$email,$phone,$password){
        $id=$_SESSION["id"];
        $sql= "UPDATE `users` SET `Name`='[$name]',`Email`='[$email]',`Phone`='[$phone]',`Pass`='[$password]' WHERE `id`='[$id]'  ";
            if($this->db->query($sql) === true){
                $this->readUser($id); 
                echo "updated successfully.";
                $this->fillArray();

            } else{
                echo "ERROR: Could not able to execute $sql. " ;
            }
    
      }
    function deleteUser() {
        $id=$_SESSION["id"];
        $sql = "delete from usesr where id=$id;";
        if($this->db->query($sql) === true) {
            echo "deletet successfully.";
            header("Location:signup.php");

        } else {
            echo "ERROR: Could not able to execute $sql. ";
        }
    }
    function rate($name, $email, $rating, $review) {
        $sql = "INSERT INTO ratings (name, email, rating, review) VALUES ('$name','$email', '$rating','$review')";
        if($this->db->query($sql) === true) {
            echo "Rating Saved Successfully.";
            $this->fillArray();
        } else {
            echo "Fee Mashakel";
        }
    }

    static function getRatings(){
        $sql = "SELECT * FROM ratings";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        return $result;
     }

    function requestContact($name, $email, $phone, $message) {
        $sql = "INSERT INTO contactings (name, email, phone, message) VALUES ('$name','$email', '$phone','$message')";
        if($this->db->query($sql) === true) {
            echo "Request sent Successfully.";
            $this->fillArray();
        } else {
            echo "Fee Mashakel";
        }
    }
 }
?>