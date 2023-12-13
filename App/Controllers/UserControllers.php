<?php
require "Controller.php";
require_once("../../../App/Models/users.php");
class UsersController extends Controller
{
	public function insert()
	{
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$phone = $_POST['Phone'];
		$password = $_POST['Password'];

		$this->model->insert($name, $email, $phone, $password);
	}

	public function edit()
	{
		$id=$_SESSION["id"];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$phone = $_POST['Phone'];
		$password = $_POST['Password'];
		$this->model->editUser($id,$name, $email, $phone, $password);

 
	}
	
	public function delete()
	{
		$this->model->deleteUser();
	}
	public function LogOut()
	{
		$id=$_SESSION["id"];
		$this->model->LogOut($id);
	}
	public function rate()
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$rating = $_REQUEST['rating'];
		$review = $_REQUEST['review'];

		$this->model->rate($name, $email, $rating, $review);
	}
	public function getRatings()
	{
		$user = new User();
		return $user->getRatings();
	}
	public function contact()
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$message = $_REQUEST['message'];

		$this->model->requestContact($name, $email, $phone, $message);
	}
}
?>