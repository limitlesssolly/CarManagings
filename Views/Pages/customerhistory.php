<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer history</title>
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
                <h1>Customers</h1>
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
                            <th> Pickup <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Distination <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Car Number<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Driver<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Cost <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Date <span class="icon-arrow">&UpArrow;</span></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Mokattam,st 13 </td>
                            <td> New cairo,concord plaza</td>
                            <td> 145|ن ص غ </td>
                            <td> Mohamed</td>
                            <td>$120</td>
                            <td  >12/10/2003</td>
                        </tr>
                       


                    </tbody>
                    <script src="../../Public/js/carshowdash.js"></script>
                    <script>
                            document.querySelectorAll('.status shipped').addEventListener('click', function() {
                                // Define the URL of the PHP page you want to open
                                var phpPageURL = '../../Views/Pages/aboutus2.php';

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