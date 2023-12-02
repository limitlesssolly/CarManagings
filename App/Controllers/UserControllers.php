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

	// public function edit() {
	// 	$name = $_REQUEST['name'];
	// 	$email = $_REQUEST['email'];
	// 	$phone = $_REQUEST['phone'];
	// 	$date = $_REQUEST['date'];
	// 	$status = $_REQUEST['status'];

	// 	$this->model->editDriver($name,$email,$phone,$date,$status);
	// }
	
	// public function delete(){
	// 	$this->model->removeDriver();
	// }
}

?>