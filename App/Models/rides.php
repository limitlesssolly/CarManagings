
<?php

include_once "../App/Database/db.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Mail/src/Exception.php';
require 'Mail/src/PHPMailer.php';
require 'Mail/src/SMTP.php';
interface Observer {
   public function update( $infoToBEUpdated);
}

class EmailNotificationObserver implements Observer {
   public function update($infoToBEUpdated) {
       $this->sendEmailNotification($infoToBEUpdated['useremail']);
       $this->update_car_status($infoToBEUpdated['carid']);
       $this->update_driver_status($infoToBEUpdated['driverid']);
   }

   private function sendEmailNotification($to) {
      $mail = new PHPMailer(true);
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username =$to;
      $mail->Password ='buwhpjbrxjdpywaz';
      $mail->SMTPSecure ='ssl';
      $mail->Port = 465;
  
      $mail->setFrom('247LimousineOfficial@gmail.com');
  
      $mail->addAddress($to);
  
      $mail->isHTML(true);
  
      $mail->Subject = "Contacting Mail";
      $mail->Body = $_POST["message"];
  
      $mail->send();
   }
   private function update_car_status($id) {
      $sql = "UPDATE Cars  SET  Status='in trip' where ID='$id'";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      if ($result) {
          return $result;
       }
       else{
          echo "error";
       }
   }
   private function update_driver_status($id) {
      $sql = "UPDATE drivers  SET  Status='in trip' where ID='$id'";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      if ($result) {
          return $result;
       }
       else{
          echo "error";
       }
   }

}
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
   private $observers = [];
   public function attach(Observer $observer) {
      $this->observers[] = $observer;
   }

  public function detach(Observer $observer) {
      $key = array_search($observer, $this->observers, true);
      if ($key !== false) {
          unset($this->observers[$key]);
      }
    }

  public function notify( $infoToBEUpdated) {
      foreach ($this->observers as $observer) {
          $observer->update( $infoToBEUpdated);
      }
  }
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


   public function AssignDriverandCar($Rideid,$DriverID,$CarID){
    $query1 = "SELECT * FROM drivers where ID='$DriverID'";
    $query2 = "SELECT * FROM cars where ID='$CarID'";
    $query3 = "SELECT * FROM rides where ID='$Rideid'";
    $result1 = mysqli_query($GLOBALS['conn'], $query1);
    $result2 = mysqli_query($GLOBALS['conn'], $query2);
    $result3 = mysqli_query($GLOBALS['conn'], $query3);

    $DriverName='';
    $DriverEmail='';
    $DriverPhone= '';
    $carname='';
    $carplate='';
    $cartype='';
    $UserEmail='';

    while ($row = $result1->fetch_assoc()) {

      $DriverName=$row['Name'];
      $DriverPhone=$row['Phone'];
      
     }
     while ($row = $result3->fetch_assoc()) {

      $UserEmail=$row['UserEmail'];
      
     }
     while ($row = $result2->fetch_assoc()) {
   
      $carname=$row['CarName'];
      $cartype=$row['CarType'];
      $carplate=$row['CarPlate'];

     }
       
           
     $sql = "UPDATE rides  SET CarID='$CarID',DriverID='$DriverID',status='started' where ID='$Rideid'";
     $result = mysqli_query($GLOBALS['conn'], $sql);
     if ($result) {
         return 'true';
      }
      else{
         echo "error";
      }

     $infoToBEUpdated=[
      'driverid'=>$DriverID,
      'carid'=>$CarID,
      'carname'=> $carname,
      'carplate'=> $carplate,
      'drivername'=>$DriverName,
      'driverphone'=>$DriverPhone,
      'useremail'=>$UserEmail,
     ];

     $this->notify( $infoToBEUpdated);
     return 'successful'; 
   }
   static function GetAllRides(){
      $sql = "SELECT * FROM rides";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      return $result;
   }
}

?>