<?php 
    include('../../Partials/sidebar.php');
require_once("../../../App/Models/users.php");
require_once("../../../App/Controllers/UserControllers.php");
// session_start();
$email=$_SESSION["Email"];
$dbh = new Dbh();
for ($j = 1; $j <= 100; $j++) {
  $sql = "SELECT `PickupDate`, `pickupTime`, `pickupLocation`, `pickupDestination`,  `DriverID` FROM rides WHERE `UserEmail` = '$email'";
  $result = $dbh->query($sql);
      while ($row= $dbh->fetchRow($result)) {
        $driverID = $row["DriverID"];
        $pickupLoc = $row["pickupLocation"];
        $Dest = $row["pickupDestination"];
        $time = $row["pickupTime"];
        $date = $row["PickupDate"];

        $history[$j] = array(
          $driverID => $driverID,
          $pickupLoc => $pickupLoc,
          $Dest => $Dest,
          $time => $time,
          $date => $date
        );
    } 
}
$rowsCount = $result->num_rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="../../../Public/Images/logodowns.png" type="image/gif">
  <link rel="stylesheet" href="../../../Public/CSS/history.css">
</head>

<body style="background-color: #ffffff;">

  <div class="center">

    <ul>
<?php
    for ($i = 1; $i <= $rowsCount; $i++) {
        echo '<li>';
        echo '<div class="image">';
        echo '<h4>Driver ' . $history[$i][$driverID] . '</h4>';
        echo '</div>';
        echo '<div class="text-group">';
        echo '<div style="font-size: 20px;"> Start Point:'.$history[$i][$pickupLoc] .'</div>';
        echo '<div style="font-size: 20px;"> Destination:'.$history[$i][$Dest] .'</div>';
        echo '</div>';
        echo '<div class="date-group">';
        echo '<h4>'.$history[$i][$date].'</h4>';
        echo '<p>'.$history[$i][$time].'</p>';
        echo '</div>';
        echo '<div id="wrapper">';
        echo '<a href="" class="btn red hide-text">';
        echo '<span>Book Again</span>';
        echo '</a>';
        echo '</div>';
        echo '</li>';
    }
    ?>
    </ul>
    
  </div>
</body>

</html>