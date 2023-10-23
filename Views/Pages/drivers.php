<?php
include_once "../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Drivers</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../Public/CSS/carshowdash.css">
</head>

<body>
    <?php
    include('../Partials/dashboardsidebar.php');
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
                    <img src="../../Public/Images/search.png" alt="">
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
                            <th> Number <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Liscenced <span class="icon-arrow">&UpArrow;</span></th>
                            <th> History </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> <img src="../../Public/Images/profile6.jpg" alt="">Farah</td>
                            <td>0123456789</td>
                            <td>
                                <p class="status delivered">Liscenced</p>
                            </td>
                            <td> <a href="">history</a></td>
                            <td> <a href=""><i class='bx bxs-edit-alt'></i></td>
                            <td> <a href=""><i class='bx bxs-basket'></i></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> <img src="../../Public/Images/profile5.jpg" alt="">Samy</td>
                            <td>01156232345</td>
                            <td>
                                <p class="status delivered">Liscenced</p>
                            </td>
                            <td> <a href="">history</a></td>
                            <td> <a href=""><i class='bx bxs-edit-alt'></i></td>
                            <td> <a href=""><i class='bx bxs-basket'></i></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> <img src="../../Public/Images/profile2.jpg" alt="">Magda</td>
                            <td>0987654321</td>
                            <td>
                                <p class="status pending">Not Liscenced</p>
                            </td>
                            <td> <a href="">history</a></td>
                            <td> <a href=""><i class='bx bxs-edit-alt'></i></td>
                            <td> <a href=""><i class='bx bxs-basket'></i></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td> <img src="../../Public/Images/profile7.jpg" alt="">Fathy</td>
                            <td>01212343456</td>
                            <td>
                                <p class="status delivered">Liscenced</p>
                            </td>
                            <td> <a href="">history</a></td>
                            <td> <a href=""><i class='bx bxs-edit-alt'></i></td>
                            <td> <a href=""><i class='bx bxs-basket'></i></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td> <img src="../../Public/Images/profile3.jpg" alt="">Sameh</td>
                            <td>01178992351</td>
                            <td>
                                <p class="status delivered">Liscenced</p>
                            </td>
                            <td> <a href="">history</a></td>
                            <td> <a href=""><i class='bx bxs-edit-alt'></i></td>
                            <td> <a href=""><i class='bx bxs-basket'></i></td>
                        </tr>
                    </tbody>
                    <script src="../../Public/js/carshowdash.js"></script>
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
