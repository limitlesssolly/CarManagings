<?php

abstract class Controller
{
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }
}
class DriversController extends Controller{
	public function add() {
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$date = $_REQUEST['date'];
		$status = $_REQUEST['status'];

		$this->model->addDriver($name,$email,$phone,$date,$status);
	}

	public function edit() {
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$date = $_REQUEST['date'];
		$status = $_REQUEST['status'];

		$this->model->editDriver($name,$email,$phone,$date,$status);
	}
	
	public function delete(){
		$this->model->removeDriver();
	}
}
