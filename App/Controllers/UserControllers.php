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
	$phone = $_POST['Phone'];
    $password = $_POST['Password'];
	$this->model->insert($name,$email,$phone,$password);
	}

	public function edit() {
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$phone = $_POST['Phone'];
		$this->model->editUser($name,$email,$phone,$password);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
	public function view(){
		$this->model->output();
	}
}
?>