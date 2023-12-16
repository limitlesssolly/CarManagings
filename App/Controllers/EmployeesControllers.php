<?php

require "Controller.php";
require_once("../App/Models/employees.php");

class EmployeeController extends Controller{

   public $employee;

   public function __construct() {
    $this->employee = new Employee();
   }

    public function Add($name, $email, $phone, $pass, $confirmpass) {
        $error = [
            'name' => '',
            'email' => '',
            'phone' => '',
            'pass' => '',
            'confirmpass' => '',
        ];

        $i = 0;

        if ($name == '') {
            $i++;
            $error['name'] = 'Please enter name';
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = $this->employee->if_EmailExists($email);

            if ($result == 'exists') {
                $i++;
                $error['email'] = 'Please choose another email address';
            }
        } else {
            $i++;
            $error['email'] = 'Please enter a valid email address';
        }

        $string = $phone;
        $phonel = '';

        for ($y = 0; $y < strlen($string); $y++) {
            if (is_numeric($string[$i])) {
                $phonel .= $string[$i];
            }
        }  

        if (strlen($phonel) != 11) {
            $i++;
            $error['phone'] = 'Please enter a valid phone number';
        }

        if ($pass == '') {
            $i++;
            $error['pass'] = 'Please enter a password';
        } else {
            $uppercase = preg_match('@[A-Z]@', $pass);
            $lowercase = preg_match('@[a-z]@', $pass);
            $number = preg_match('@[0-9]@', $pass);
            
            $minLength = 8;
            
            if ($uppercase && $lowercase && $number && strlen($pass) >= $minLength) {
                if ($confirmpass == '') {
                    $i++;
                    $error['confirmpass'] = 'Please enter a confirmation password';
                } else if ($confirmpass != $pass) {
                    $i++;
                    $error['confirmpass'] = "Passwords don't match";
                }
            } else {
                $i++;
                $error['pass'] = 'Password must be at least 8 characters including uppercase, lowercase, and numbers';

                if ($confirmpass == '') {
                    $i++;
                    $error['confirmpass'] = 'Please enter a confirmation password';
                } else {
                    $i++;
                    $error['confirmpass'] = 'Please enter a valid password first';
                }
            }
        }

        if ($i == 0) {
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
            $this->employee->AddEmployee($name, $email, $phone, $hashedPassword);
            return 'Successful';
        } else {
            return $error;
        }
    }

    public function getEmployees() {
       return $this->employee->getEmployees();
    }

    public function Delete($id) {
        return $this->employee->removeEmployee($id);
    }

    public function Edit($id, $name, $email, $phone, $pass, $confirmpass) {
         $i = 0;

         if ($id == null) {
            $i++;
            return 'Please enter id';
         } else {
            $employeeInfo = $this->employee->readEmployee($id);

            while ($row = $employeeInfo->fetch_assoc()) {
                if ($name == '') {
                   $name = $row['Name'];
                }

                if ($email == '') {
                    $email = $row['Email'];
                }

                if ($phone == '') {
                    $phone = $row['Phone'];
                }

                if ($pass == '' && $confirmpass == '') {
                    $pass = $row['Password'];
                }

                if ($pass != '') {
                    $uppercase = preg_match('@[A-Z]@', $pass);
                    $lowercase = preg_match('@[a-z]@', $pass);
                    $number = preg_match('@[0-9]@', $pass);
                    
                    $minLength = 8;
                    
                    if ($uppercase && $lowercase && $number && strlen($pass) >= $minLength) {
                        if ($confirmpass == '') {
                            $i++;
                            $error['confirmpass'] = 'Please enter a confirmation password';
                        } else if ($confirmpass != $pass) {
                            $i++;
                            $error['confirmpass'] = "Passwords don't match";
                        }
                    } else {
                        $i++;
                        $error['pass'] = 'Password must be at least 8 characters including uppercase, lowercase, and numbers';

                        if ($confirmpass == '') {
                            $i++;
                            $error['confirmpass'] = 'Please enter a confirmation password';
                        } else {
                            $i++;
                            $error['confirmpass'] = 'Please enter a valid password first';
                        }
                    }         
                 }

                 $this->employee->editEmployee($id, $name, $email, $phone, $pass);
                 return 'Successful';
            }
         }
    }
}
?>
