<?php

require "Controller.php";
require_once("../App/Models/employees.php");

class EmployeesController {

   public $employee;
   public function __construct() {
    $this->employee=new Employee();
   }

    public function Add($name,$email,$phone,$pass,$confirmpass) {
		$error=[
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'pass'=>'',
            'confirmpass'=>'',
        ];
        $i=0;
        if($name =='')
        {
            $i++;
            $error['name']='please enter name';
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $result= $this->employee->if_Emailexists($email);
            if($result=='exists'){
                $i++;
                $error['email']='please choose antoher email address'; 
            }

        } else {
            $i++;
            $error['email']='please enter a valid email address';
        }
        $string = $phone;
        $phonel='';
        for ($y = 0; $y < strlen($string); $y++) {
            if (is_numeric($string[$i])) {
                $phonel .= $string[$i];
            }
        }  
        if(strlen($phonel) !=11 )
        {
            $i++;
            $error['phone']='please enter a valid phone number';
        }

        if($pass=='')
        {
            $i++;
            $error['pass']='please enter a password';
        }else {
            $uppercase = preg_match('@[A-Z]@', $pass);
            $lowercase = preg_match('@[a-z]@', $pass);
            $number = preg_match('@[0-9]@', $pass);
            
            // Define minimum length for the password
            $minLength = 8;
            
            if ($uppercase && $lowercase && $number && strlen($pass) >= $minLength) {
                
                if($confirmpass=='')
                {
                    $i++;
                    $error['confirmpass']='please enter a confirmation password';
                } 
                else if($confirmpass!=$pass){
                    $i++;
                    $error['confirmpass']="passwords dont match";
                }
                     
            } else {
                $i++;
                $error['pass']='password must be at least 8 characters including uppercase,lowrcase,and numbers';

                if($confirmpass=='')
                {
                    $i++;
                    $error['confirmpass']='please enter a confirmation password';
                } 
                else{
                    $i++;
                    $error['confirmpass']="please a valid password first";
                }
            }
        }

		if($i==0)
		{
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
			$this->employee->AddEmployee($name,$email,$phone,$hashedPassword);
			return 'successful';
		}else{
			return $error;
		}
	}
	public function getEmployees(){

	   return  $this->employee->getEmployees();
	}

	public function Delete($id){

		return$this->employee->removeAdmin($id);
	}
	public function Edit($id,$name,$email,$phone,$pass,$confirmpass){
		 $i=0;
         $error=[
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'pass'=>'',
            'confirmpass'=>'',
        ];
         if($id == null)
		 {
            $i++;
			return 'please enter id';

		 }else{

		$driverinfo =$this->employee->readEmployee($id);
		while ($row = $driverinfo->fetch_assoc()) {
			if($name==''){
               $name=$row['Name'];
			}

			if($email==''){
				$email=$row['Email'];
			 }else{
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    $result= $this->employee->if_Emailexists($email);
                    if($result=='exists'){
                        $i++;
                        $error['email']='please choose antoher email address'; 
                    }
                }else{
                    $i++;
                    $error['email']='please enter a valid email address'; 
                }
             }


			 if($phone==''){
				$phone=$row['Phone'];
			 }
             
             if($pass!=''){
                $uppercase = preg_match('@[A-Z]@', $pass);
                $lowercase = preg_match('@[a-z]@', $pass);
                $number = preg_match('@[0-9]@', $pass);
                
                $minLength = 8;
                
                if ($uppercase && $lowercase && $number && strlen($pass) >= $minLength  && $confirmpass==$pass) {
                    
                } else {
                    $i++;
                    $error['pass']='password must be at least 8 characters including uppercase,lowrcase,and numbers';
                    $error['confirmpass']='please enter confirm pass';
                }         
             }else if($pass==''){
                   $pass=$row['Password'];
             }

             if($i==0){
                $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
                $this->employee->editEmployee($id,$name,$email,$phone, $hashedPassword);
                return	'successful';
             }else{
                return $error;
             }


		   } 
		 }  




	}
}
