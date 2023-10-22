<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/add.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Add Car</title>
</head>
<body>
<?php
    include("../Partials/dashboardsidebar.php");
    ?>
       <div class="adddrivers">
        <section>
            <form action="" method="post">

                <div class="name">
                    <label for="fullname">Name</label>
                    <input type="text" class="field" name="fullname"> <br>
                </div>

                <div class="contactinfo">
                    <label for="contactnumbers">Contact Number</label>
                    <input type="text" class="field" name="contactnumbers"> <br>
                </div>

                <div class="status">
                    <label for="salary">expected salary</label>
                    <input type="text" class="field" name="salary"> <br>

                    <label for="date">date of employment </label>
                    <input type="date" class="field" name="date"> <br>

                    <label for="liscenced">liscenced</label>
                    <input type="radio" name="liscenced">
                    <input type="radio" name="liscenced"> <br>
                </div>

                <div class="subs">
                    <input type="submit" name="submit" value="add driver">
                </div>
            </form>
        </section>
    </div>
</body>
</html>