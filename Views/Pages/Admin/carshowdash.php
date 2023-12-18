<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Our Cars</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Add your CSS file paths here -->
    <link rel="stylesheet" href="../../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../../Public/CSS/carshowdash.css">
</head>

<body>

<?php
session_start();
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

            </section>

            <section class="table__body">

                <table>
                    <thead>
                        <tr>
                            <!-- Add your table headers based on your data model -->
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Plate</th>
                            <th>Status</th>
                            <th>Category</th>
                            <th>Total Profit</th>
                            <!-- Add more headers if needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Loop through the cars and display them in the table
                        foreach ($_SESSION['AllCars'] as $car) {
                            echo "<tr>";
                            echo "<td>{$car['ID']}</td>";
                            echo "<td>{$car['Name']}</td>";
                            echo "<td>{$car['Type']}</td>";
                            echo "<td>{$car['Plate']}</td>";
                            echo "<td>{$car['Status']}</td>";
                            echo "<td>{$car['Category']}</td>";
                            echo "<td>{$car['TotalProfit']}</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </section>
        </main>

    </section>

    <!-- Add your JavaScript file paths here -->
    <script src="../../../../Public/js/carshowdash.js"></script>

</body>

</html>
