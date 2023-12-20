<?php
include('../../Partials/sidebar.php');
require_once("../../../App/Models/users.php");
require_once("../../../App/Controllers/UserControllers.php");
$model = new User();
$controller = new UsersController($model);
$email = $_SESSION["Email"];
$dbh = new Dbh();
for ($j = 1; $j <= 100; $j++) {
  $sql = "SELECT * FROM rides WHERE `UserEmail` = '$email'";
  $result = $dbh->query($sql);
  if ($row = $dbh->fetchRow($result)) {
    $driverID = $row["DriverID"];
    $pickupLoc = $row["pickupLocation"];
    $Dest = $row["pickupDestination"];
    $time = $row["pickupTime"];
    $date = $row["PickupDate"];

    $history[$j] = array(
      'DriverID' => $driverID,
      'pickupLocation' => $pickupLoc,
      'pickupDestination' => $Dest,
      'pickupTime' => $time,
      'PickupDate' => $date
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
          echo '<h4>Driver ' . $history[$i]['DriverID'] . '</h4>';
          echo '</div>';
          echo '<div class="text-group">';
          echo '<div style="font-size: 20px;"> Start Point:' . $history[$i]['pickupLocation'] . '</div>';
          echo '<div style="font-size: 20px;"> Destination:' . $history[$i]['pickupDestination'] . '</div>';
          echo '</div>';
          echo '<div class="date-group">';
          echo '<h4>' . $history[$i]['PickupDate'] . '</h4>';
          echo '<p>' . $history[$i]['pickupTime'] . '</p>';
          echo '</div>';
          echo '<div id="wrapper">';
          echo '<a href="../bookyourcar.php" class="btn red hide-text">';
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