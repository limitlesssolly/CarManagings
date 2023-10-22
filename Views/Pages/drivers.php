<?php
include_once "../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>All Drivers</title>
</head>

<body>

    <?php
    include("../Partials/dashboardsidebar.php");
    ?>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Drivers</span>
            <div class="drivers">
                <?php
                // $query = "SELECT * FROM drivers";
                // echo '<table border="0" cellspacing="2" cellpadding="2">
                //     <tr>
                //         <td>
                //             <font face="Arial">Value1</font>
                //         </td>
                //         <td>
                //             <font face="Arial">Value2</font>
                //         </td>
                //     </tr>';

                //     if ($result = $mysqli->query($query)) {
                //     while ($row = $result->fetch_assoc()) {
                //     $field1name = $row["col1"];
                //     $field2name = $row["col2"];

                //     echo '<tr>
                //         <td>'.$field1name.'</td>
                //         <td>'.$field2name.'</td>
                //     </tr>';
                //     }
                //     $result->free();
                //     }
                    ?>
            </div>

        </div>
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
<!--
<body>
    <div class="drivers">
            <h3>All Drivers</h3>
        <section class="tbod">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> History <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Anwar </td>
                        <td> 0100598762</td>
                        <td>
                            <p class="status avaliable">avaliable</p>
                        </td>
                        <td><a href="#">History</a></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> Mohsen </td>
                        <td> 0123236692</td>
                        <td>
                            <p class="status notavaliable">Cancelled</p>
                        </td>
                        <td><a href="#">History</a></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> Marwan </td>
                        <td> 0100722462</td>
                        <td>
                            <p class="status avaliable">avaliable</p>
                        </td>
                        <td><a href="#">History</a></td>
                    </tr>
                    <tr>
                    <td> 4 </td>
                        <td> Loay </td>
                        <td> 0117934220</td>
                        <td>
                            <p class="status avaliable">avaliable</p>
                        </td>
                        <td><a href="#">History</a></td>
                    </tr>
                    <tr>
                    <td> 5 </td>
                        <td> Bayoumi </td>
                        <td> 0128459265</td>
                        <td>
                            <p class="status unavaliable">Cancelled</p>
                        </td>
                        <td><a href="#">History</a></td>
                    </tr>
                    
                </tbody>
                <script src="../../Public/js/carshowdash.js"></script>
            </table>

        </section>
    </div>
</body>

</html> -->
