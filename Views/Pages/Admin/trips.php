<?php   session_start();  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Rides</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../Public/CSS/carshowdash.css">
    <link rel="stylesheet" href="../../../Public/CSS/alert.css">
    <style>
        body{
            overflow: hidden;
        }
         td button{
            width: 70px;
        }
        .status.request {
    background-color:#cac855;
    color: white;
    width: 89px;
}
    </style>
</head>

<body>



         <?php
          include('../../Partials/dashboardsidebar.php');
        ?> 
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>
        <main class="table">
            <section class="table__header">
                <h1>Our Rides</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="../../../Public/Images/search.png" alt="">
                </div>
                <div class="export__file">
                </div>
            </section>

            <div class="alert hide"> 
                        <span class="fas fa-check-circle"></span>
                        <span class="msg">updated Successfully!</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
           </div>
           
                <section class="table__body">
        <table>
            <thead>
                <tr>
                 
                    <th>ID</th>
                    <th> Start</th>
                    <th> Endpoint </th>
                    <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Time <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Driver ID</th>
                    <th> User Email <span class="icon-arrow">&UpArrow;</span></th>
                    <th> User phone <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Status </th>
                    <th> Car ID </th>
                    <th> Car Plate </th>
                    <th> Car Type </th>
                    <th> Comment </th>
                    <th> PaymentWay </th>
                    <th > Trip Cost <span class="icon-arrow">&UpArrow;</span></th>
                    <th>not assigned</th>
                    <th>-----</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i=0;
                    while ( isset( $_SESSION['AllRides'][$i]['ID']) ){
                        echo "<tr>";
                        echo "<td>" . $_SESSION['AllRides'][$i]['ID'] . "</td>";
                        echo "<td>" .  $_SESSION['AllRides'][$i]['pickupLocation'] . "</td>";
                        echo "<td>" .  $_SESSION['AllRides'][$i]['pickupDestination'] . "</td>";
                        echo "<td>" . $_SESSION['AllRides'][$i]['PickupDate'] . "</td>";
                        echo "<td>" .  $_SESSION['AllRides'][$i]['pickupTime'] . "</td>";
                        echo "<td>" .  $_SESSION['AllRides'][$i]['DriverID'] . "</td>";
                        echo "<td>" .  $_SESSION['AllRides'][$i]['UserEmail'] . "</td>";
                        echo "<td>" .  $_SESSION['AllRides'][$i]['UserPhone'] . "</td>";

                        if(  $_SESSION['AllRides'][$i]['Status']=="started"){
                            echo '<td>
                            <p class="status shipped" style="color: white;">' .  $_SESSION['AllRides'][$i]['Status'] . '</p>
                            </td>';                            
                        }else if($_SESSION['AllRides'][$i]['Status']=='requested'){

                            echo '<td>
                            <p class="status request"  >' .  $_SESSION['AllRides'][$i]['Status'] . '</p>
                            </td>';
    
                        }else if($_SESSION['AllRides'][$i]['Status']=='finished'){

                            echo '<td>
                            <p class="status request"  >' .  $_SESSION['AllRides'][$i]['Status'] . '</p>
                            </td>';
    
                        }
                        else{
                            echo '<td>
                            <p class="status cancelled" style="color: white;">' .  $_SESSION['AllRides'][$i]['Status'] . '</p>
                            </td>';
    
                        }
                        

                      echo "<td>" .  $_SESSION['AllRides'][$i]['CarID'] . "</td>"; 
                      echo "<td>" .  $_SESSION['AllRides'][$i]['CarPlate'] . "</td>";
                      echo "<td>" .  $_SESSION['AllRides'][$i]['CarType'] . "</td>";
                      echo "<td>" .  $_SESSION['AllRides'][$i]['Comment'] . "</td>";
                      echo "<td>" .  $_SESSION['AllRides'][$i]['PaymentWay'] . "</td>";
                      echo "<td>" .  $_SESSION['AllRides'][$i]['TotalCost'] . "</td>";
                      echo "<td> <button class='status shipped' onclick='goToEditCarPage()'>assign</button> </td>";

                       
                      if(  $_SESSION['AllRides'][$i]['Status']=="started"){                           
                        echo "<td><form >  <button class='status shipped' id='" . $_SESSION['AllRides'][$i]['ID'] . "'>Cancel</button> </form> </td>";
                        
                    }else if($_SESSION['AllRides'][$i]['Status']=='requested'){

                        echo "<td><form >  <button class='status cancelled' id='" . $_SESSION['AllRides'][$i]['ID'] . "'>Cancel</button> </form> </td>";


                    }else if($_SESSION['AllRides'][$i]['Status']=='finished'){
                        echo '<td>
                        <p class="status delivered" style="color: white;">' .  $_SESSION['AllRides'][$i]['Status'] . '</p>
                        </td>';
                    }else{
                        echo '<td>
                        <p class="status cancelled" style="color: white;">' .  $_SESSION['AllRides'][$i]['Status'] . '</p>
                        </td>';

                    }
                      echo "</tr>";
                      $i++;
                    }
                ?>
            </tbody>
            <script>
                    function goToEditCarPage() {
                        // Use window.location.href to navigate to the desired path
                        window.location.href = '/CarManagings/Routes/dashboardrouter.php?action=assigndrivercarpage';
                    }
            </script>
            <script src="../../../Public/js/carshowdash.js"></script>
            <script src="../../../Public/js/deleteride1.js"></script>
        </table>
    
            </section>
        </main>

    </section> 
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent)
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close")
        })


    </script>





</body>

