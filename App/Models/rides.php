
<?php

include_once "../App/Database/db.php";
 
class Rides{

   public $ID;
   public $PickupDate;
   public $pickupTime;
   public $pickupLocation;
   public $pickupDestination;
   public $Status;
   public $CarPlate;
   public $CarType;
   public $DriverID;
   public $UserName;
   public $UserEmail;
   public $UserPhone;
   public $Comment;
   Public $PaymentWay;
   Public $TotalCost;

   Public function InsertInDB($PickupDate,$pickupTime,$pickupLocation,$pickupDestination,$Status,$CarType,$UserName,$UserEmail,$UserPhone,$Comment,$PaymentWay,$TotalCost){
    $sql = "insert into rides(PickupDate,pickupTime,pickupLocation,pickupDestination,Status,CarID,CarPlate,CarType,DriverID,UserName,UserEmail,UserPhone,Comment,PaymentWay,TotalCost) 
    values('$PickupDate','$pickupTime','$pickupLocation', '$pickupDestination','$Status','null','null',
    '$CarType','null','$UserName','$UserEmail','$UserPhone','$Comment','$PaymentWay','$TotalCost')";
    $result = mysqli_query($GLOBALS['conn'], $sql);
    if ($result) {
        return 0;
     }
     else{
        echo "error";
     }
   }  


   static function AssignDriverandCar($DriverID,$CarID){
    $query1 = "SELECT * FROM drivers where ID='$DriverID'";
    $query2 = "SELECT * FROM cars where ID='$CarID'";
    

    
   }
   static function GetAllRides(){
      $sql = "SELECT * FROM rides";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      return $result;
   }


}

?>