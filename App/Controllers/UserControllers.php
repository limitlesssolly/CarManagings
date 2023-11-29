<?php
	// session_start();
    // include_once "../../includes/db.php";
    // $email=$_SESSION['Email'];
    // $sql="delete from users where Email=".$email;
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     session_destroy();
    //     header("Location:index.php");
    // }

require_once(__ROOT__ . "Controllers/Controller.php");

class UsersController extends Controller{
	public function insert() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$age = $_REQUEST['age'];
		$phone = $_REQUEST['phone'];

		$this->model->insertUser($name,$password,$age,$phone);
	}

	public function edit() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$age = $_REQUEST['age'];
		$phone = $_REQUEST['phone'];

		$this->model->editUser($name,$password,$age,$phone);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
}
?>