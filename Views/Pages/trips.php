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
                    <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Driver <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Start <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Endpoint <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Trip Date <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Car Plate <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Trip Cost <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1 </td>
                    <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td>
                    <td> John Doe </td>
                    <td> City A </td>
                    <td> City B </td>
                    <td> 2023-10-24 </td>
                    <td>
                        <p class="status delivered">Delivered</p>
                    </td>
                    <td> 123|ن ص ع </td>
                    <td> <strong> $128.90 </strong></td>
                </tr>
                <tr>
                    <td> 2 </td>
                    <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td>
                    <td> karim  </td>
                    <td> Cairo </td>
                    <td> alex </td>
                    <td> 2023-10-12 </td>
                    <td>
                        <p class="status delivered">Delivered</p>
                    </td>
                    <td> 123|ن ص ع </td>
                    <td> <strong> $128.90 </strong></td>
                </tr>
                <tr>
                    <td> 3 </td>
                    <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td>
                    <td> ashraf </td>
                    <td> newyork</td>
                    <td> California </td>
                    <td> 2023-10-24 </td>
                    <td>
                        <p class="status delivered">Delivered</p>
                    </td>
                    <td> 123|ن ص ع </td>
                    <td> <strong> $128.90 </strong></td>
                </tr>
                <tr>
                    <td> 4 </td>
                    <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td>
                    <td> John  </td>
                    <td> City A </td>
                    <td> City B </td>
                    <td> 2023-10-24 </td>
                    <td>
                        <p class="status delivered">Delivered</p>
                    </td>
                    <td> 123|ن ص ع </td>
                    <td> <strong> $128.90 </strong></td>
                </tr>
                <tr>
                    <td> 5 </td>
                    <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td>
                    <td> John Doe </td>
                    <td> City A </td>
                    <td> City B </td>
                    <td> 2023-10-24 </td>
                    <td>
                        <p class="status delivered">Delivered</p>
                    </td>
                    <td> 123|ن ص ع </td>
                    <td> <strong> $128.90 </strong></td>
                </tr>
                <!-- Add more rows with trip details here -->
            </tbody>
            <!-- ... (your existing script includes) ... -->
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

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your existing head content) ... -->
</head>
<body>
    <!-- ... (your existing content) ... -->
  
</body>
</html>
