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
}
?>