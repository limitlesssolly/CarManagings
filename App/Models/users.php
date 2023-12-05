<?php
require_once("../../../Views/View.php");
require_once("../../../App/Database/Dbh.php");
require_once("../../../App/Models/Model.php");

// abstract class Model{
//     protected $db;
//     protected $conn;
//     public function connect(){
//         if(null === $this->conn ){
//             $this->db = new Dbh();
//         }
//         return $this->db;
//     }
// }

class User extends Model
{
    protected $id;
    protected $name;
    // protected $type;
    protected $email;
    protected $password;
    protected $phone;
private $users;
    function __construct($name = "", $email = "", $phone = "", $password = "")
    {
        $this->db = $this->connect();
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->password = $password;
        
    }
    function setName($name)
    {
        return $this->name = $name;
    }
    function getName()
    {
        return $this->name;
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


    // function getID()
    // {
    //     return $this->id;
    // }
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
// public  function readUser($email)
//     {
//         $sql = "SELECT * FROM users where Email=" . $email;
//         $db = $this->connect();
//         $result = $db->query($sql);
//         if ($result->num_rows == 1) {
//             $row = $db->fetchRow();
//             $this->name = $row["Name"];
//             $_SESSION["Name"] = $row["Name"];
//             $this->email = $row["Email"];
//             $_SESSION["Email"] = $row["Email"];
//             $this->phone = $row["Phone"];
//             $_SESSION["Phone"] = $row["Phone"];

//         } else {
//             $this->name = "";
//             $this->email = "";
//             $this->phone = "";
//         }
//         return $result ;
//     }
//     function editUser($name,$email,$password,$phone){
//         $sql = "update user set Name='$name',Email='$email', Pass='$password', Phone='$phone' where id=$this->id;";
//           if($this->db->query($sql) === true){
//               echo "updated successfully.";
//               $this->readUser($this->id);
//           } else{
//               echo "ERROR: Could not able to execute $sql. " ;
//           }
  
//     }
    
    function deleteUser(){
        $sql="delete from user where email=$this->email;";
        if($this->db->query($sql) === true){
              echo "deletet successfully.";
          } else{
              echo "ERROR: Could not able to execute $sql. ";
          }
      }

      function rate($name,$email,$rating,$review){
        $sql = "INSERT INTO ratings (name, email, rating, review) VALUES ('$name','$email', '$rating','$review')";
		if($this->db->query($sql) === true){
            echo "Rating Saved Successfully.";
			$this->fillArray();
		} else {
            echo "Fee Mashakel";
        }
      }

      function requestContact($name,$email,$phone,$message){
        $sql = "INSERT INTO contactings (name, email, phone, message) VALUES ('$name','$email', '$phone','$message')";
		if($this->db->query($sql) === true){
            echo "Request sent Successfully.";
			$this->fillArray();
		} else {
            echo "Fee Mashakel";
        }
      }
}
class ViewUser extends View{	
	public function view(){
        return $this->model->getName();
		
	}
	// public function editForm(){
	// 	$str='<form action="profile.php?action=editaction" method="post">
	// 	<div>Name:</div><div> <input type="text" name="name" value="'.$this->model->getName().'"/></div><br>
	// 	<div>Password:</div><div> <input type="password" name="password" value="'.$this->model->getPassword().'"/></div><br>
	// 	<div>Age:</div><div> <input type="text" name="age" value="'.$this->model->getAge().'"/></div><br>
	// 	<div>Phone: </div><div><input type="text" name="phone" value="'.$this->model->getPhone().'"/></div><br>
	// 	<div><input type="submit" /></div>';
	// 	return $str;
	// }
}
?>




