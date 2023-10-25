<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Cars</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../Public/CSS/carshowdash.css">
    <style>
        td button{
            width: 70px;
        }
    </style>
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
                <h1>Our Cars</h1>
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
                            <th> Type<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Plate <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Category <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Total Profit <span class="icon-arrow">&UpArrow;</span></th>
                            <th> History </th>
                            <th>Owner</th>
                            <th>----</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td>
                            <td> Sedan </td>
                            <td> 123|ن ص ع </td>
                            <td>
                                <p class="status pending">in ride</p>
                            </td>
                            <td>Ours</td>
                            <td> <strong> $128.90 </strong></td>
                            <td><form action="" ><button class="status shipped">Show</button></form></td>
                            <td></td>
                            <td><form action="" ><button class="status cancelled">Delete</button></form></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><img src="../../Public/Images/carla.png" alt=""> Toyota </td>

                            <td> suv </td>
                            <td> 154|ت ص غ </td>
                            <td>
                                <p class="status delivered">available</p>
                            </td>
                            <td>rented</td>
                            <td> <strong>$5350.50</strong> </td>
                            <td><form action="" ><button class="status shipped">Show</button></form></td>
                            <td><form action="../Pages/rentedcarinfo.php" ><button class="status shipped">Show</button></form></td>
                            <td><form action="" ><button class="status cancelled">Delete</button></form></td>

                        </tr>
                        <tr>
                            <td> 3</td>
                            <td><img src="../../Public/Images/carla.png" alt=""> Mitsubishsi </td>
                            <td> suv </td>
                            <td> 154|ت ص غ </td>
                            <td>
                                <p class="status shipped">Shipped</p>
                            </td>
                            <td>Ours</td>
                            <td> <strong>$210.40</strong> </td>
                            <td><form action="" ><button class="status shipped">Show</button></form></td>
                            <td></td>
                            <td><form action="" ><button class="status cancelled">Delete</button></form></td>
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