<?php
abstract class Controller
{
    protected $model;
    public function __construct($model) {
        $this->model = $model;
    }
}
class UsersController extends Controller{
	public function insert() {
	$name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $phone = $_POST['Phone'];
	$this->model->insert($name,$email,$password,$phone);
	}

	public function edit() {
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$phone = $_POST['Phone'];
		$this->model->editUser($name,$email,$password,$phone);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
	public function view(){
		$this->model->output();
	}

	public function addRating(){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$rating = $_REQUEST['rating'];
		$review = $_REQUEST['review'];

		$this->model->rate($name,$email,$rating,$review);
	}
	public function getRatings(){
		$user=new  User();
	   return	$user->getRatings();
	}
	public function contact(){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$message = $_REQUEST['message'];

		$this->model->requestContact($name,$email,$phone,$message);
	}
}
?>