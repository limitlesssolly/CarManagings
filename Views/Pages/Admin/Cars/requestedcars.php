<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requested Cars</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="../../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../../Public/CSS/carshowdash.css">
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
                <h1>Our Cars</h1>
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
                           
                            <th>Client Name <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Email<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Phone<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Car Type <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Car Model <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Expected salary <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Hasan </td>
                            <!-- <td> <img src="../../Public/Images/carla.png" alt="">Toyota</td> -->
                            <td> hasan@gmail.com </td>
                            <td> 01111567154 </td>
                            <td> Sedan </td>
                            <td> Suzuki 2023</td>
                            <td> <strong> $1280.90 </strong></td>
                        </tr>
                       
                    </tbody>
                    <script src="../../../../Public/js/carshowdash.js"></script>
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