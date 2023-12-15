<?php

require "Controller.php";
require_once("../App/Models/drivers.php");
class DriversController extends Controller{



	public function Add($name,$email,$phone,$date,$img,$status) {

		$error=[
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'date'=>'',
			'img'=>'',
			'status'=>''
        ];
        $i=0;
        if($name =='')
        {
            $i++;
            $error['name']='please enter name';
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
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
		// $this->model->addDriver($name,$email,$phone,$date,$status);
        if($date=='')
		{
			$i++;
            $error['date']='please enter a date';
		}
		if($img=='')
		{
			$i++;
            $error['img']='please enter a photo';
		}    
        if($status=='')
		{
			$i++;
            $error['status']='please enter status';
		} 
		if($i==0)
		{
			$drivers=new  Driver();
			$drivers->addDriver($name,$email,$phone,$date,$status,$img);
			return 'successful';
		}else{
			return $error;
		}

	}
	public function getdrivers(){
		$drivers=new  Driver();
	   return	$drivers->readDrivers();
	}	
	public function Delete($id){

		$drivers=new  Driver();
		return $drivers->removeDriver($id);


	}
	public function Edit($id,$name,$email,$phone,$img,$status) {
		


		 $i=0;
         if($id == null)
		 {
            $i++;
			return 'please enter id';

		 }else{
			$drivers=new  Driver();

		$driverinfo =$drivers->readDriver($id);
		while ($row = $driverinfo->fetch_assoc()) {
     
			 
		
			if($name==''){
               $name=$row['Name'];
			}

			if($email==''){
				$email=$row['Email'];
			 }

			 if($phone==''){
				$phone=$row['Phone'];
			 }

			 if($img==''){
				$img= $row['img'];
			 }
			 if($status==''){
				$status= $row['status'];
			 }
			 $drivers->editDriver($id,$name,$email,$phone,$img, $status);
			 return	'successful';
 
		   } 
    
		 }

        

	}
}
