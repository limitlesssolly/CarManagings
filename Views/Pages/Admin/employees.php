<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../Public/CSS/alert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../Public/CSS/carshowdash.css">
    <style>
        body{
            overflow: hidden;
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
        <div class="alert hide"> 
                        <span class="fas fa-check-circle"></span>
                        <span class="msg">deleted Successfully!</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
        </div>
        <main class="table">
            <section class="table__header">
                <h1>Admins</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="../../../Public/Images/search.png" alt="">
                </div>
                <div class="export__file">

                </div>
            </section>

            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Email<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Phone<span class="icon-arrow">&UpArrow;</span></th>
                            <th> ------ <span class="icon-arrow">&UpArrow;</span></th>
                            <th>------- <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $i=0;
                    while (isset( $_SESSION['AllEmployees'][$i]['ID']) ){
                        echo "<tr>";
                      
                        echo "<td>" . $_SESSION['AllEmployees'][$i]['ID'] . "</td>";
                        echo "<td>" .  $_SESSION['AllEmployees'][$i]['Name'] . "</td>";
                        echo "<td>" . $_SESSION['AllEmployees'][$i]['Email'] . "</td>";
                        echo "<td>" .  $_SESSION['AllEmployees'][$i]['Phone'] . "</td>";

                      echo "<td><form action='../Pages/assigntrip.php'> <button class='status shipped'>Edit</button> </form> </td>";
                      echo "<td><form id='deleteform'>  <button class='status cancelled' id='" . $_SESSION['AllEmployees'][$i]['ID'] . "'>delete</button> </form> </td>";
                      echo "</tr>";
                      $i++;
                    }
                ?>
            </tbody>
                    <script src="../../../Public/js/carshowdash.js"></script>
                    <script src="../../../Public/js/deleteadmin.js"></script>
                    <script>
                            document.querySelectorAll('.status shipped').addEventListener('click', function() {
                                // Define the URL of the PHP page you want to open
                                var phpPageURL = '../../../Views/Pages/aboutus2.php';

                                // Use the window.location object to navigate to the PHP page
                                window.location.href = phpPageURL;
                            });
                    </script>
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

</html>