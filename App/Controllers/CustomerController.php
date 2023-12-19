<?php

require "Controller.php";
require_once("../App/Models/CustomerModel.php");

class CustomerController extends Controller {

    public $customer;

    public function __construct() {
        $this->customer = new Customer(); 
    }

    public function Add($name, $email, $phone, $pass, $confirmpass) {
        $error = [
            'name' => '',
            'email' => '',
            'phone' => '',
            'pass' => '',
            'confirmpass' => '',
        ];

      

        if ($i == 0) {
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
            $this->customer->AddCustomer($name, $email, $phone, $hashedPassword);
            return 'successful';
        } else {
            return $error;
        }
    }

    public function getCustomers() {
        return $this->customer->getCustomers();
    }

    public function Delete($id) {
        return $this->customer->removeCustomer($id);
    }

    public function Edit($id, $name, $email, $phone, $pass, $confirmpass) {
        $i = 0;

        

        if ($i == 0) {
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
            $this->customer->editCustomer($id, $name, $email, $phone, $hashedPassword);
            return 'successful';
        } else {
            return $error;
        }
    }
}
