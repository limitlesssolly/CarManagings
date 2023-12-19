<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../Public/CSS/editprofiledash.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Edit your profile</title>
</head>
<body>
    <?php include("../../Partials/dashboardsidebar.php"); ?>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>
        <!-- form -->
        <div class="alert hide"> 
            <span class="fas fa-check-circle"></span>
            <span class="msg">Edited Successfully!</span>
            <div class="close-btn">
                <span class="fas fa-times"></span>
            </div>
        </div>
        <div class="contactForm" style="background-color: transparent;">
            <h2>Updating Info</h2>
            <form id="contactForm">
                <!-- Your form input fields go here -->
                <div id="error"></div>
                <div class="inputBox">
                    <input type="submit" value="SEND">
                </div>
            </form>
        </div>
        <!-- end of form -->
    </section>
    <script>
        // Your JavaScript code goes here
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
        });
    </script>
</body>
</html>
