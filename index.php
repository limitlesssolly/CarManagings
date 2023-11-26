<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
    case '/home':
        require __DIR__ . '../Views/Pages/home.php';
        break;

    case '/signups':
        require __DIR__ . '../Views/Pages/User/signup.php';
        break;

    case '/about':
        require __DIR__ . '../Views/Pages/User/aboutus.php';
        break;
    
    case '/rentcar':
        require __DIR__ . '../Views/Pages/User/rentyourcar.php';
        break;

    case '/ordercar':
        require __DIR__ . '../Views/Pages/User/bookyourcar.php';
        break;

    case '/ordercar/choosecar':
        require __DIR__ . '../Views/Pages/User/chooseyourcar.php';
        break;

    case '/ordercar/info':
        require __DIR__ . '../Views/Pages/User/infodetails.php';
        break;    
    
    case '/rate':
        require __DIR__ . '../Views/Pages/User/ratings.php';
        break;

    case '/contactus':
        require __DIR__ . '../Views/Pages/User/contactus.php';
        break;
    
    case '/profile':
        require __DIR__ . '../Views/Pages/User/profile.php';
        break;

    case '/profile/history':
        require __DIR__ . '../Views/Pages/User/history.php';
        break;

    case '/admin':
        require __DIR__ . '../Views/Pages/Admin/dashboard.php';
        break;
    
    case '/adminlogin':
        require __DIR__ . '../Views/Pages/Admin/dashboardlogin.php';
        break;
        
    case '/admin/alladmins':
        require __DIR__ . '../Views/Pages/Admin/admins.php';
        break;

    case '/admin/addadmins':
        require __DIR__ . '../Views/Pages/Admin/addadmins.php';
        break;

    case '/admin/editadmins':
        require __DIR__ . '../Views/Pages/Admin/editadmins.php';
        break;

    case '/admin/editprofile':
        require __DIR__ . '../Views/Pages/Admin/editprofiledash.php';
        break;

    case '/admin/ratings':
        require __DIR__ . '../Views/Pages/Admin/ratingdash.php';
        break;

    case '/admin/cars':
        require __DIR__ . '../Views/Pages/Admin/Cars/carshowdash.php';
        break;
        
    case '/admin/cars/add':
        require __DIR__ . '../Views/Pages/Admin/Cars/addCar.php';
        break;
        
    case '/admin/cars/edit':
        require __DIR__ . '../Views/Pages/Admin/Cars/editCar.php';
        break;
        
    case '/admin/cars/rented':
        require __DIR__ . '../Views/Pages/Admin/Cars/rentedcarinfo.php';
        break;
        
    case '/admin/cars/requested':
        require __DIR__ . '../Views/Pages/Admin/Cars/requestedcars.php';
        break;
        
    case '/admin/customers':
        require __DIR__ . '../Views/Pages/Admin/Customers/customers.php';
        break;
        
    case '/admin/customers/add':
        require __DIR__ . '../Views/Pages/Admin/Customers/addcustomers.php';
        break;
        
    case '/admin/customers/edit':
        require __DIR__ . '../Views/Pages/Admin/Customers/editcustomers.php';
        break;
        
    case '/admin/customers/history':
        require __DIR__ . '../Views/Pages/Admin/Customers/customerhistory.php';
        break;
        
    case '/admin/drivers':
        require __DIR__ . '../Views/Pages/Admin/Drivers/drivers.php';
        break;
        
    case '/admin/drivers/add':
        require __DIR__ . '../Views/Pages/Admin/Drivers/adddrivers.php';
        break;
        
    case '/admin/drivers/edit':
        require __DIR__ . '../Views/Pages/Admin/Drivers/editdrivers.php';
        break;
        
    // case '/admin/drivers/delete':
    //     require __DIR__ . '../Views/Pages/Admin/Drivers/deletedrivers.php';
    //     break;
        
    case '/admin/drivers/history':
        require __DIR__ . '../Views/Pages/Admin/Drivers/driverhistory.php';
        break;
        
    case '/admin/employees':
        require __DIR__ . '../Views/Pages/Admin/Employees/employees.php';
        break;
        
    case '/admin/employees/add':
        require __DIR__ . '../Views/Pages/Admin/Employees/addemployees.php';
        break;
        
    case '/admin/employees/edit':
        require __DIR__ . '../Views/Pages/Admin/Employees/editemployees.php';
        break;
        
    case '/admin/trips':
        require __DIR__ . '../Views/Pages/Admin/Trips/trips.php';
        break;
        
    case '/admin/trips/add':
        require __DIR__ . '../Views/Pages/Admin/Trips/addtrip.php';
        break;
        
    case '/admin/trips/assign':
        require __DIR__ . '../Views/Pages/Admin/Trips/assigntrip.php';
        break;
        
    default:
        require __DIR__ . '../Views/Pages/404.php';
        break;
}