<?php
include_once "../App/Database/db.php";
class Employee
{
    public $ID;
    public $Name;
    public $Email;
    public $Phone;

    public function AddEmployee($name,$email, $phone,$password){
        $sql = "INSERT INTO employee (Name,Email,Password, Phone,Employee_Type) VALUES ('$name','$email','$password', '$phone','2')";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 0;
        }
         else{
            echo "error";
        }
    }

    public function getEmployees(){
		$sql = "SELECT * FROM employee where Employee_Type='2'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            return "error";
         }
	}

    function editEmployee($id,$name,$email, $phone,$pass)
    {
        $sql = "UPDATE employee  SET Name='$name',Email='$email', Phone='$phone', Password='$pass' where ID='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'true';
         }
         else{
            echo "error";
         }
        
    }


    function removeAdmin($id)
    {
        $sql = "DELETE FROM employee WHERE id='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return 'sucessful';
         }
         else{
            echo "error";
         }
    }
    
    function readEmployee($id)
    {
        $sql = "SELECT * FROM employee where ID=".$id;
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            return $result;
         }
         else{
            return "notfound";
         }
    }
    public function if_Emailexists($email)
    {
        $sql = "SELECT * FROM employee where Email='$email'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if (mysqli_num_rows($result) == 0) {
            return $result;
         }
         else{
            return "exists";
         }
    }
    
}
?>
