<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Customers</title>

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
                <h1>Customers</h1>
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
                            <th> History <span class="icon-arrow">&UpArrow;</span></th>
                            <!-- <th> Salary <span class="icon-arrow">&UpArrow;</span></th> -->
                            <th>------- <span class="icon-arrow">&UpArrow;</span></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> Hasan Eid</td>
                            <td> hasan@gmail.com </td>
                            <td> 01123626850</td>
                            <td>
                                <form action="../../Views/Pages/Admin/Customer/customerhistory.php"> <button
                                        class="status shipped ">Show </form></button>
                            </td>
                            <td><button class="status cancelled">Delete</button> </td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> Ahmed Morad </td>
                            <td> morad@gmail.com </td>
                            <td> 01223626851</td>
                            <td>
                                <button class="status shipped ">Show</button>
                            </td>
                            <td> <button class="status cancelled">Delete</button> </td>
                        </tr>
                        <tr>
                            <td> 3</td>
                            <td> Karim Ashraf </td>
                            <td> karim@gmail.com </td>
                            <td> 01123626444</td>
                            <td>
                                <button class="status shipped ">Show</button>
                            </td>
                            <td> <button class="status cancelled">Delete</button> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> Saad Mohamed </td>
                            <td> saad@gmail.com</td>
                            <td> 01123626666</td>
                            <td>
                                <button class="status shipped ">Show</button>
                            </td>
                            <td> <button class="status cancelled">Delete</button> </td>
                        </tr>
                    </tbody>
                    <script src="../../../Public/js/carshowdash.js"></script>
                </table>

            </section>
        </main>
    </section>

    <script>
        document.querySelectorAll('.status shipped').addEventListener('click', function () {
            // Define the URL of the PHP page you want to open
            var phpPageURL = '../../Views/Pages/aboutus2.php';

            // Use the window.location object to navigate to the PHP page
            window.location.href = phpPageURL;
        });

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