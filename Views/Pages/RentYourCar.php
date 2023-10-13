<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/RentYourCar.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../Images/icons/logodowns.png" />
    <title>Rent Your Car</title>
</head>

<style>
*{
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Ubuntu', sans-serif;
}
form{
    text-align: center;
}
</style>

<body>
    <form>
        <input type="text" name="fullname" placeholder="full name"> <br>
        <input type="text" name="contactnumbers" placeholder="contact numbers"> <br>
        <input type="text" name="homeaddress" placeholder="home address"> <br>
        <input type="text" name="cartype" placeholder="car type"> <br>
        <input type="text" name="carmodel" placeholder="car model"> <br>
        <input type="text" name="mileage" placeholder="mileage"> <br>
        <input type="text" name="expectedmonthlyrent" placeholder="expected monthly rent"> <br>
        <input type="radio" name="insured" placeholder="yes"> 
        <input type="radio" name="notinsured" placeholder="no"> <br>
        <input type="radio" name="havedriver" placeholder="yes"> 
        <input type="radio" name="nothavedriver" placeholder="no"> <br>
        <input type="submit"> 
    </form>
</body>
</html>