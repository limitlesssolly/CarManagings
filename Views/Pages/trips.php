<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Rides</title>
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
                <h1>Our Rides</h1>
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
                    <th> NO. </th>
                    <th>ID</th>
                    <th> Car Name </th>
                    <th> Driver </th>
                    <th> Customer Email <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Start</th>
                    <th> Endpoint </th>
                    <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Time <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Status </th>
                    <th> Car Plate </th>
                    <th> Trip Cost <span class="icon-arrow">&UpArrow;</span></th>
                    <th>not assigned</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1 </td>
                    <td>12502</td>
                    <td>Toyota</td>
                    <td> John Doe </td>
                    <td> moamen@gmail.com </td>
                    <td> City A </td>
                    <td> City B </td>
                    <td> 2023-10-24 </td>
                    <td>12:34pm</td>
                    <td>
                        <p class="status delivered">Delivered</p>
                    </td>
                    <td> 123|ن ص ع </td>
                    <td> <strong> $128.90 </strong></td>
                </tr>

                <tr>
                    <td> 2 </td>
                    <td>----</td>
                    <td>----</td>
                    <td> ----- </td>
                    <td> moamen@gmail.com </td>
                    <td> City A </td>
                    <td> City B </td>
                    <td> 2023-10-24 </td>
                    <td>12:34pm</td>
                    <td>
                        <p class="status pending">Pending</p>
                    </td>
                    <td> ----</td>
                    <td> <strong> $128.90 </strong></td>
                    <td><form action="../Pages/assigntrip.php"> <button class="status shipped">assign</button> </form> </td>
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
