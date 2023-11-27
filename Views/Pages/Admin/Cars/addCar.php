<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../../Public/CSS/add.css">
    <link rel="stylesheet" href="../../../../Public/CSS/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Add Car</title>
</head>

<body>
    <?php
    include("../../../Partials/dashboardsidebar.php");
    ?>
    <div class="adddrivers">
        <section>
            <form action="" method="post">

                <div class="name">
                    <label for="fullname">Name</label>
                    <input type="text" class="field" name="fullname"> <br>
                </div>

                <div class="contactinfo">
                    <label for="Type">Type</label>
                    <input type="text" class="field" name="Type"> <br>
                </div>
                <div class="contactinfo">
                    <label for="id">ID</label>
                    <input type="text" class="field" name="id"> <br>
                </div>
                <div class="contactinfo">
                    <label for="plate">Plate Number</label>
                    <input type="text" class="field" name="plate"> <br>
                </div>
                <div class="contactinfo">
                    <label for="image-upload" class="upload-button">Car Image
                        <input type="file" id="image-upload" accept="image/*">
                </div>
                <div class="status">
                    <label for="Avilable">Avilable</label>
                    <input type="checkbox" name="Avilable"> <br>
                    <label for="ours">Is this car ours</label>
                    <input type="checkbox" name="ours"> <br>
                </div>

                <div class="subs">
                    <input type="submit" name="submit" value="Add">
                </div>
            </form>
        </section>
    </div>
</body>

</html>