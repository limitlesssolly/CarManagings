<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Our Cars</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Add your CSS file paths here -->
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../Public/CSS/carshowdash.css">
</head>

<body>

<?php
session_start();
include('../../Partials/dashboardsidebar.php');
?>

    <section class="home-section">

        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>

        <main class="table">

            <section class="table__header">

                <h1>Our Cars</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="../../../Public/Images/search.png" alt="">
                </div>

            </section>

            <section class="table__body">

                <table>
                    <thead>
                        <tr>
                            <!-- Add your table headers based on your data model -->
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Plate</th>
                            <th>Color</th>
                            <th>Status</th>
                            <th>Assigned Driver</th>
                            <th>history</th>
                            <th>-----</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;
                        while (isset( $_SESSION['AllCars'][$i]['ID']) ){
                            echo "<tr>";
                        
                            echo "<td>" . $_SESSION['AllCars'][$i]['ID'] . "</td>";
                            echo "<td>" .  $_SESSION['AllCars'][$i]['CarName'] . "</td>";
                            echo "<td>" . $_SESSION['AllCars'][$i]['CarType'] . "</td>";
                            echo "<td>" .  $_SESSION['AllCars'][$i]['CarPlate'] . "</td>";
                            echo "<td>" .  $_SESSION['AllCars'][$i]['Colour'] . "</td>";
                       
                            if( $_SESSION['AllCars'][$i]['Status'] == 'available'  ||  $_SESSION['AllCars'][$i]['Status'] == 'Available' ){
                                echo '<td>
                                <p class="status delivered">' .  $_SESSION['AllCars'][$i]['Status'] . '</p>
                                </td>'; 
                            }else{
                                echo '<td>
                                <p class="status cancelled">' .  $_SESSION['AllCars'][$i]['Status'] . '</p>
                                </td>'; 
                            }
                        if( $_SESSION['AllCars'][$i]['AssignedDriver'] ==''){
                            echo "<td> No driver </td>"; 
                        }else{
                            echo "<td>" .  $_SESSION['AllCars'][$i]['AssignedDriver'] . "</td>"; 
                        }    
                         
                        echo "<td><form action='../Pages/assigntrip.php'> <button class='status shipped'>show</button> </form> </td>";
                        echo "<td><form id='deleteform'>  <button class='status cancelled' id='" . $_SESSION['AllCars'][$i]['ID'] . "'>delete</button> </form> </td>";
                        echo "</tr>";
                        $i++;
                        }
                   ?>
            </tbody>
                </table>

            </section>
        </main>

    </section>

    <!-- Add your JavaScript file paths here -->
    <script src="../../../Public/js/carshowdash.js"></script>

</body>

</html>
