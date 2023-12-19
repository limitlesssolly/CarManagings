<?php 
    include('../../Partials/sidebar.php');

require_once("../../../App/Models/users.php");
require_once("../../../App/Controllers/UserControllers.php");
$email=$_SESSION["Email"];
$model = new User();
$dbh = new Dbh();
$controller = new UsersController($model);
    $sql = "SELECT * FROM rides WHERE UserEmail='$email'";
    $dbh = new Dbh();
    $result = $dbh->query($sql);
    if ($result) {
      $rows = array();
      while ($row = $result->fetch_assoc()) {
          $rows[] = $row;
          echo("saved");
      }
    }
      // foreach ($rows as $row) {
      //       $history=[$row["DriverID"],$row["pickupLocation"],$row["pickupDestination"],$row["pickupTime"], $row["PickupDate"]];
      //   } 
      //   $rowsCount = count($rows);
      $rowsCount = count($rows);
echo($rowsCount);
      for($j=1;$j<=$rowsCount;$j++) {
        $history[$j] = array(
          $row["DriverID"],
          $row["pickupLocation"],
          $row["pickupDestination"],
          $row["pickupTime"],
          $row["PickupDate"]
      );   
     } 

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
        echo '<h4>Driver ' . $history[$i]=array( $row["DriverID"] ) . '</h4>';
        echo '</div>';
        echo '<div class="text-group">';
        echo '<div style="font-size: 20px;"> Start Point:'.$history[$i]=array( $row["pickupLocation"] ) .'</div>';
        echo '<div style="font-size: 20px;"> Destination: Cairo</div>';
        echo '</div>';
        echo '<div class="date-group">';
        echo '<h4>March 13, 2023</h4>';
        echo '<p>5:00 PM</p>';
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