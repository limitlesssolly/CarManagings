<?php

include_once "../App/Database/db.php";

// Step 1: Observer Interface
interface Observer {
    public function update(Rides $ride);
}

// Step 2: Concrete Observer
class EmailNotificationObserver implements Observer {
    public function update(Rides $ride) {
        $rideDetails = $ride->getRideDetails();
        $this->sendEmailNotification($rideDetails['UserEmail'], $rideDetails['UserName']);
    }

    private function sendEmailNotification($to, $userName) {
        $subject = "Driver and Car Assigned for Your Ride";
        $message = "Dear $userName,\n\n";
        $message .= "We are pleased to inform you that a driver and car have been assigned for your ride.\n";
        // Add more details as needed

        // Use mail() function to send the email
        mail($to, $subject, $message);
    }
}

// Step 3: Subject (Rides) Class
class Rides {
    private $observers = [];
    private $rideDetails;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function AssignDriverandCar($rideID, $DriverID, $CarID) {
        // Fetch driver and car details from the database
        $driverDetails = /* fetch driver details */;
        $carDetails = /* fetch car details */;

        // Update ride details with assigned driver and car
        $this->DriverID = $DriverID;
        $this->CarPlate = $carDetails['CarPlate'];
        // Update other relevant details...

        // Notify observers after assigning driver and car
        $this->notify();
    }

    public function getRideDetails() {
        return $this->rideDetails;
    }

    // Existing methods...
}

// Step 4: Usage Example
$rides = new Rides();

$emailNotificationObserver = new EmailNotificationObserver();
$rides->attach($emailNotificationObserver);

// Assign driver and car to the ride
$rides->AssignDriverandCar($rideID, $DriverID, $CarID);
?>
