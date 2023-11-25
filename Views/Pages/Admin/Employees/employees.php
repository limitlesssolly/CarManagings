<?php
// include_once "../../includes/db.php";
$username = "root";
$password = "";
$database = "24sevenlimousine";
$mysqli = new mysqli("localhost", $username, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../../Public/CSS/carshowdash.css">
    <style>
       td button{
            width: 70px;
        }
    </style>
</head>

<body>



       <?php
          include('../../../Partials/dashboardsidebar.php');
        ?> 
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>
        <main class="table">
            <section class="table__header">
                <h1>Emplyees</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="../../../../Public/Images/search.png" alt="">
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
                            <th> DOE<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Total Hours <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Salary <span class="icon-arrow">&UpArrow;</span></th>
                            <th> -----</th>
                            <th> -----</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr> -->
                            <?php
                            // $query = "SELECT * FROM employees";
                            // if ($result = $mysqli->query($query)) {
                            // $i=0;
                            //     while ($row = $result->fetch_assoc()) {
                            //         $name = $row["Name"];
                            //         $email = $row["Email"];
                            //         $phone = $row["Phone"];
                            //         $totalhours = $row["TotalHours"];
                            //         $salary = $row["Salary"];
                            //         $doe=$row["DateOfEmployment"];
                            //         echo'<tr>';
                            //         echo '<td>' .++$i. '</td>';
                            //         echo '<td>' .$name. '</td>';
                            //         echo '<td>' .$email. '</td>';
                            //         echo '<td>' .$phone. '</td>';
                              
                            //         echo '<td>' .$doe. '</td>';
                            //         echo '<td>' .$totalhours. '</td>';
                            //         echo '<td>' .$salary. '</td>';
                            
                            //         echo '<td> <form action="../Pages/editemployees.php">  <button class="status shipped" >Edit</button> </form> </td>';
                            //         echo '<td>  <form method="post"> 
                            //               <input type="hidden" name="email" value="'.$email.'">
                            //               <button class="status cancelled">Delete</button></form></td>';
                            //         echo '</tr>';
                            //     }
                            // }
                            ?>
                        <!-- </tr> -->

                    </tbody>
                    <script src="../../../../Public/js/carshowdash.js"></script>
                </table>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                         $email=$_POST['email'];
                         $sql="DELETE FROM employees WHERE Email='$email'";

                         $result = mysqli_query($conn, $sql);

                         if ($result) {
                            echo "<meta http-equiv='refresh' content='0'>";
                         }
                    }
                    
                 ?>
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