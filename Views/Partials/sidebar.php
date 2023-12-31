<?php session_start();?>
<html lang="en">

<head>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"rel="stylesheet">

    <link rel="stylesheet" href="../../../Public/CSS/sideBarr.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">

</head>

<body>

    <nav class="navbar">

        <div class="navbar-container">

            <div class="navbar-logo-div">
                <button class="navbar-toggler"><i class='fas fa-solid fa-bars'></i></button>
            </div>

            <!-- <input type="search" name="search" placeholder="Search..." class="navbar-search" id="search">
            <i id='icon-search' class="fas fa-regular fa-magnifying-glass"></i> -->

            <ul class="menu-list">

                <li class="menu-item">
                    <a class="menu-link" href="../../Pages/User/history.php">
                        <i class="fas fa-history"></i>
                        <span class="menu-link-text">History</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="../../Pages/User/profile.php">
                        <i class="fas fa-solid fa-user"></i>
                        <span class="menu-link-text">Profile</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="../../../index.php">
                        <i class="fas fa-solid fa-home"></i>
                        <span class="menu-link-text">Home</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="user-container">

            <div class="user-info">
                <i class="fas fa-solid fa-user-secret"></i>
                <div class="user-details">
                    <h3 class="user-name">
                        
                    </h3>
                </div>
            </div>
            <form action="sidebar.php?action=LogOut" method="">
            <a class="logout-btn" href="../../Pages/User/signup.php">
                <i class="fas fa-sharp fa-regular fa-arrow-right-from-bracket">
                </i>
            </a>
</form>
        </div>
    </nav>

</body>

<script>
    const btnToggler = window.document.querySelector(".navbar-toggler");
    const inputSearch = window.document.querySelector(".navbar-search");
    const iconSearch = window.document.querySelector("#icon-search");
    const navbar = window.document.querySelector(".navbar");
    btnToggler.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
    inputSearch.addEventListener('click', () => {
        if (!navbar.classList.contains("active")) {
            navbar.classList.add('active');
        }
    });
    iconSearch.addEventListener('click', () => {
        if (!navbar.classList.contains("active")) {
            navbar.classList.add('active');
        }
    });

</script>

</html>