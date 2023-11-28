
<?php
include_once "../../includes/database.php";
 
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
   public $DriverName;
   public $DriverPhone;
   public $UserEmail;
   public $UserPhone;
   Public $PaymentWay;
   Public $TotalCost;

   Public function InsertInDB($ID,$PickupDate,$pickupTime,$pickupLocation,$pickupDestination,$Status,$CarPlate,$CarType,$DriverID,$DriverName,$DriverPhone,$UserEmail,$UserPhone,$PaymentWay,$TotalCost){
    $sql = "insert into rides(ID,PickupDate,pickupTime,pickupLocation,pickupDestination,
    Status,CarPlate,CarType,DriverID,DriverName,DriverPhone,UserEmail,UserPhone,PaymentWay,TotalCost) 
    values('$ID','$PickupDate','$pickupTime','$pickupLocation', '$pickupDestination',
    '$Status','$CarPlate','$CarType','$DriverID','$DriverName','$DriverPhone','$UserEmail','$UserPhone','$PaymentWay','$TotalCost')";
    $result = mysqli_query($GLOBALS['conn'], $sql);
    if ($result) {
        return 0;
     }
     else{
        echo "error";
     }
   }  


   static function AssignDriverandCar($rideID,$DriverID,$CarID){
    $query = "SELECT * FROM drivers where ID='$DriverID'";
    $query2 = "SELECT * FROM cars where ID='$CarID'";
      

   }

}

?>