<?php

require_once("../App/Models/rides.php");
class Booking{

    public function firstvalidation($start,$end,$distance,$date,$time){
     
        $error=[
            'start'=>'',
            'end'=>'',
            'dist'=>'',
            'date'=>'',
            'time'=>'',
        ];
        $i=0;
        if($start=='' && $end=='')
        {
            $i++;
           $error['start']='Please enter a pickup and destination';
        }
        else if($start==''){
            $i++;
            $error['start']='Please enter a pickup';
        }else if($end==''){
            $i++;
            $error['end']='Please enter a destination';
        }       

        $string = $distance;
        $path='';
        for ($y = 0; $y < strlen($string); $y++) {
            if (is_numeric($string[$y]) || $string[$y]=='.' ) {
                $path .= $string[$y];
            }
        }
        if($path=='' || $path==0 || $path=='0')
        {
            $i++;
            $error['dist']='Please enter a valid pickup and destination';   
        }

        $currentDate = date('Y-m-d'); // Get today's date in the string format 'YYYY-MM-DD'
        $chosenDate = $date; // Assuming 'date' is the name of your input field
        $chosenDate = date('Y-m-d', strtotime($chosenDate)); // Convert the entered date to 'YYYY-MM-DD'
        
        if ($chosenDate === $currentDate) {
            $currentTimestamp = time();
            $enteredTime = $time;
            $enteredTimestamp = strtotime($enteredTime);
            if( $enteredTimestamp  < $currentTimestamp){
                $i++;
                $error['time']='Please enter a correct time';
            }

        } else if($chosenDate > $currentDate){
            
        } else if($chosenDate < $currentDate){
            $i++;
            $error['date']='Please choose a valid date'; 
        }
        if($time =='')
        {
            $i++;
            $error['time']='Please enter a time';
        }

        if($i==0)
        {
            return 'successful';
        }else{
            return $error;
        }
    }

    public function secondvalidation($name,$email,$phone,$cash,$fawry,$comment){
     
        $error=[
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'payment'=>'',
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

        if($cash=='true' && $fawry=='true')
        {
            $i++;
            $error['payment']='please choose only one payment method ';
        }
        if($cash=='false' && $fawry=='false')
        {
            $i++;
            $error['payment']='please choose a payment method ';
        }

        if($cash =='true'){
            $payment='pay to captain';
        }else if($fawry=='true'){
            $payment='fawry';
        }

        if($i==0){
         
            $string =  $_SESSION['ride']['distance'];
            $path='';
            for ($y = 0; $y < strlen($string); $y++) {
                if (is_numeric($string[$y]) || $string[$y]=='.' ) {
                    $path .= $string[$y];
                }
            }
            $cost=$path*5;
            $ride=new Rides();
            $ride->InsertInDB($_SESSION['ride']['date'],
            $_SESSION['ride']['time'],
            $_SESSION['ride']['start'],
            $_SESSION['ride']['end'],
            'requested',
            $_SESSION['ride']['cartype'],
            $name,
            $email,
            $phone,
            $comment,
            $payment,
            $cost
            );
            return 'successful';
        }else{
            return $error;
        }


    }
 
  }
  
  ?>

