
<?php

include_once "../App/Database/db.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../Mail/src/Exception.php';
require '../Mail/src/PHPMailer.php';
require '../Mail/src/SMTP.php';


interface Observer {
   public function update($infoToBEUpdated);
   public function cancel($infoToBEUpdated);
}

class EmailNotificationObserver implements Observer {
   public function update($infoToBEUpdated) {
       
       $message= [
         'carname' => $infoToBEUpdated['carname'],
         'carplate' =>$infoToBEUpdated['carplate'],
         'drivername' => $infoToBEUpdated['drivername'],
         'driverphone' => $infoToBEUpdated['driverphone'],
         'useremail' =>$infoToBEUpdated['useremail'],
         'carcolor'=>$infoToBEUpdated['carcolor']
     ];
       $this->sendEmailNotification($message);
       $this->update_driver_status($infoToBEUpdated['driverid']);
       return  $this->update_car_status($infoToBEUpdated['carid']);
   }
   public function cancel($infoToBEUpdated) {

      $carid = $infoToBEUpdated['carid'];
      $driverid = $infoToBEUpdated['driverid'];
      $sql = "UPDATE Cars  SET  Status='available' where ID='$carid'";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      
      $sql2 = "UPDATE drivers  SET  status='available' where ID='$driverid'";
      $result2 = mysqli_query($GLOBALS['conn'], $sql2);

      return "successful";
  }

   private function sendEmailNotification($message) {
      $mail = new PHPMailer(true);
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username ='247LimousineOfficial@gmail.com';
      $mail->Password ='buwhpjbrxjdpywaz';
      $mail->SMTPSecure ='ssl';
      $mail->Port = 465;
  
      $mail->setFrom('247LimousineOfficial@gmail.com');
  
      $mail->addAddress($message['useremail']);
  
      $mail->isHTML(true);
  
      $mail->Subject = "Your Ride";
      $mail->Body = "
      <p>Car Name: {$message['carname']}</p>
      <p>Car Plate: {$message['carplate']}</p>
      <p>Car Color: {$message['carcolor']}</p>
      <p>Driver Name: {$message['drivername']}</p>
      <p>Driver Phone: {$message['driverphone']}</p>

      ";
  
      $mail->send();
   }
   private function update_car_status($id) {
      $sql = "UPDATE Cars  SET  Status='in trip' where ID='$id'";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      if ($result) {
          return "successful";
       }
       else{
          return "error";
       }
   }
   private function update_driver_status($id) {
      $sql = "UPDATE drivers  SET  status='in trip' where ID='$id'";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      if ($result) {
         //  return $result;
       }
       else{
         //  echo "error";
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
   private $observer;
   public function attach(Observer $observer) {
      $this->observers[] = $observer;
  }

  public function detach(Observer $observer) {
      $key = array_search($observer, $this->observers, true);
      if ($key !== false) {
          unset($this->observers[$key]);
      }
    }

    public function notify($operation,$infoToBEUpdated) {
      if($operation=='cancel'){
         foreach ($this->observers as $observer) {
            return $observer->cancel($infoToBEUpdated);
         }
      }else if($operation== 'assign'){
      foreach ($this->observers as $observer) {
         return $observer->update($infoToBEUpdated);
      }
   }else if($operation== 'edit'){}

  }
  public function setObserver(Observer $observer) {
   $this->observer = $observer;
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
    $carcolor='';
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
      $carcolor=$row['Colour'];
     }
       
           
     $sql = "UPDATE rides  SET CarID='$CarID',DriverID='$DriverID',status='started' where ID='$Rideid'";
     $result = mysqli_query($GLOBALS['conn'], $sql);


   if ($result) {
      // Attach the observer before notifying
      $emailObserver = new EmailNotificationObserver();
      $this->attach($emailObserver);

      $infoToBEUpdated = [
          'driverid' => $DriverID,
          'carid' => $CarID,
          'carname' => $carname,
          'carplate' => $carplate,
          'drivername' => $DriverName,
          'driverphone' => $DriverPhone,
          'carcolor'=>$carcolor,
          'useremail' => $UserEmail,
      ];
      // $this->notify('assign',$infoToBEUpdated);

      return  $this->notify('assign',$infoToBEUpdated);
  } else {
      return "error";
  } 
   }
   static function GetAllRides(){
      $sql = "SELECT * FROM rides";
      $result = mysqli_query($GLOBALS['conn'], $sql);
      return $result;
   }
   public function CancelRide($ID){

      $sql = "SELECT * FROM rides where ID='$ID'";
      $result = mysqli_query($GLOBALS['conn'], $sql);
        
      while ($row = $result->fetch_assoc()) {
         if($row['CarID']==0){
            $sql = "UPDATE rides  SET Status='cancelled' where ID='$ID'";
            $result = mysqli_query($GLOBALS['conn'], $sql);
         }
         else{

            $sql = "UPDATE rides  SET CarID='null',DriverId='null' ,Status='cancelled' where ID='$ID'";
            $result = mysqli_query($GLOBALS['conn'], $sql);

            $emailObserver = new EmailNotificationObserver();
            $this->attach($emailObserver);
             
            $infoToBEUpdated = [
               'driverid' => $row['DriverID'],
               'carid' => $row['CarID'],
           ];
            if($this->notify('cancel',$infoToBEUpdated)){
               return 'successful';
            }
           
         }
        }
   }
}

?>