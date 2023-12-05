<?php

require "Controller.php";
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
		$status = $_REQUEST['status'];

		$this->model->editDriver($name,$email,$phone,$status);
	}
	
	public function delete(){
		$this->model->removeDrivers();
	}
	public function allDrivers(){
		$str="";
		$str.=$this->model->getName();
		$str.=$this->model->getEmail();
		$str.=$this->model->getPhone();
		$str.=$this->model->getDate();
		$str.=$this->model->getStatus();
		// $str.="<h5>".$this->model->getStatus()."</h5>";
		// $str.="<h5>".$this->model->getStatus()."</h5>";
		return $str;
	}
}
