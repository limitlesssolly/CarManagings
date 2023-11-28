
<?php 
 class Booking{
   public function firstvalidation($pick,$dist,$date,$time){
           if ($pick !='' && $dist!='' && $date!='' && $time!='' ){
              return 'successful';
           }else{
              return 'failed';
           }
   }

 }