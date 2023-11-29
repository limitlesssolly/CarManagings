<?php 
if (isset($_GET['action']) && !empty($_GET['action'])) {
	switch($_GET['action']){

		case 'dash':
			header("Location:dashboard.php");
			break;
		case 'admin':
			header("Location:admins.php");
			break;
		case 'admin/add':
			header("Location:addadmins.php");
			break;
		case 'admin/edit':
			header("Location:editadmins.php");
			break;
		case 'driver':
			header("Location:drivers.php");
			break;
		case 'driver/add':
			header("Location:adddrivers.php");
			break;
		case 'driver/edit':
			header("Location:editdrivers.php");
			break;
		case 'driver/delete':
			header("Location:deletedrivers.php");
			break;
		case 'driver/history':
			header("Location:driverhistory.php");
			break;
	}
}
?>
<link rel="stylesheet" href="../../../Public/CSS/dashboard.css">

<div class="sidebar ">

    <div class="logo-details">
        <i class='bx bxs-dashboard'></i>
        <span class="logo_name">24Sevenlimousine</span>
    </div>

    <ul class="nav-links">

        <li>
            <div class="iocn_link">
                <a>
                    <i class='bx bxs-group'></i>
                    <span class="link_name">Drivers</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name">Drivers</a></li>
                <li><a href="?action=driver">show</a></li>
                <li><a href="?action=driver/add">Add</a></li>
                <li><a href="?action=driver/edit">Edit</a></li>
                <li><a href="?action=driver/history">History</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn_link">
                <a>
                    <i class='bx bxs-car'></i>
                    <span class="link_name">Cars</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name" href="">Cars</a></li>
                <li><a href="/admin/cars">Show</a></li>
                <li><a href="/admin/cars/add">Add</a></li>
                <li><a href="/admin/cars/edit">Edit</a></li>
                <li><a href="/admin/cars/requested">Requested Cars</a></li>
                <li><a href="/admin/cars/rented">Rented Cars</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn_link">
                <a>
                    <i class='bx bx-trip'></i>
                    <span class="link_name">Trips</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name" href="/admin/trips">Trips</a></li>
                <li><a href="/admin/trips/add">Add</a></li>
                <li><a href="/admin/trips/assign">Assign driver and car</a></li>
                <li><a href="">Edit</a></li>
                <li><a href="">Delete</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn_link">
                <a>
                    <i class='bx bx-group'></i>
                    <span class="link_name">Employes</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name" href="">Employes</a></li>
                <li><a href="/admin/employees">Show</a></li>
                <li><a href="/admin/employees/add">Add</a></li>
                <li><a href="/admin/employees/edit">Edit</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn_link">
                <a>
                    <i class='bx bx-group'></i>
                    <span class="link_name">Customers</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name" href="">Customers</a></li>
                <li><a href="/admin/customers">Show</a></li>
                <li><a href="/admin/customers/add">Add</a></li>
                <li><a href="/admin/customers/edit">Edit</a></li>
                <li><a href="/admin/customers/history">History</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn_link">
                <a href="/admin/ratings">
                    <i class='bx bx-star'></i>
                    <span class="link_name">Ratings</span>
                </a>
            </div>
        </li>

        <li>
            <div class="iocn_link">
                <a href="">
                    <i class='bx bx-chat'></i>
                    <span class="link_name">Chats</span>
                </a>
            </div>
        </li>

        <li>
            <div class="iocn_link">
                <a>
                    <i class='bx bx-group'></i>
                    <span class="link_name">Admins</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name" href="">Admins</a></li>
                <li><a href="/admin/alladmins">Show</a></li>
                <li><a href="/admin/addadmins">Add</a></li>
                <li><a href="/admin/editadmins">Edit</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn_link">
                <a>
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Settings</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name" href="">Settings</a></li>
                <li><a href="/admin/editprofile">Edit your profile</a></li>
            </ul>
        </li>

        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="../../../../Public/Images/flag.png" alt="">
                </div>

                <div class="name-job">
                    <div class="profile_name">Saher Amr</div>
                    <div class="job">Admin</div>
                </div>
                <i class='bx bx-log-out'></i>
            </div>
        </li>

    </ul>
</div>