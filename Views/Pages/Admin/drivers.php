

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Drivers</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../Public/CSS/carshowdash.css">
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
                <h1>All Drivers</h1>
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
                            <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Phone <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Status <span class="icon-arrow">&UpArrow;</span</th>
                            <th> Date Of Employment <span class="icon-arrow">&UpArrow;</span</th>
                           
                            <th> History <span class="icon-arrow">&UpArrow;</span></th>
                       
                            <th> ---------- </th>
                        </tr>
                    </thead>
                    <tbody>
                   
                      
                    </tbody>
                    <script src="../../../Public/js/carshowdash.js"></script>
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