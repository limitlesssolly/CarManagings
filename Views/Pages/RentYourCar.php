<!-- <?php
  include_once "includes/db.php";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Your Car</title>
</head>

<style>
    *{
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Ubuntu', sans-serif;
}
.title{
    text-align:center;

}
.image{
    float:right;
}
form{
    text-align: center;
    float: left;
    position: relative;
    left:10%;
    
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 10px 10px 10px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4c8bc5;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #2a4f71;
}
</style>

<body>
    <div class="title">Rent Your Car</div>
    <div class="image">
        <img src="" class="carimg" alt="carla">
    </div>
    <form action="" method="post">

        <div class="name">
            <label for="fullname">Full Name</label>
            <input type="text" class="field" name="fullname" placeholder="full name"> <br>
        </div>

        <div class="contactinfo">
            <label for="contactnumbers">Contact Number</label>
            <input type="text" class="field" name="contactnumbers" placeholder="contact numbers"> <br>

            <label for="homeaddress">Home Address</label>
            <input type="text" class="field" name="homeaddress" placeholder="home address"> <br>
        </div>
        
        <div class="carinfo">
            <label for="cartype">Car Type</label>
            <input type="text" class="field" name="cartype" placeholder="car type"> <br>

            <label for="carmodel">Car Model</label>
            <input type="text" class="field" name="carmodel" placeholder="car model"> <br>

            <label for="mileage">Mileage</label>
            <input type="text" class="field" name="mileage" placeholder="mileage"> <br>

            <label for="expectedmonthlyrent">Expected Monthly Rent</label>
            <input type="text" class="field" name="expectedmonthlyrent" placeholder="expected monthly rent"> <br>
            
            <label for="insured">Insured</label>
            <input type="radio" name="insured" placeholder="yes"> 
            <input type="radio" name="notinsured" placeholder="no"> <br>

            <label for="havedriver">Have A Driver</label>
            <input type="radio" name="havedriver" placeholder="yes"> 
            <input type="radio" name="nothavedriver" placeholder="no"> <br>
        </div>

        <div class="subs">
            <input type="submit" name="submit">
        </div>
    </form>

<!-- <?php

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
	$fullname=htmlspecialchars($_POST["fullname"]);
	$contactnumbers=htmlspecialchars($_POST["contactnumbers"]);
	$homeaddress=htmlspecialchars($_POST["homeaddress"]);
	$cartype=htmlspecialchars($_POST["cartype"]);
	$mileage=htmlspecialchars($_POST["mileage"]);
	$expectedmonthlyrent=htmlspecialchars($_POST["expectedmonthlyrent"]);

	$sql="insert into cars4rent(FirstName,LastName,Email,Password,Hobby) 
	values('$fullname','$contactnumbers','$homeaddress','$cartype','$mileage', 'expectedmonthlyrent')";
	$result=mysqli_query($conn,$sql);

	if($result)	{
        print("woohoo");
	}
}
?> -->

</body>
</html>

<?php
//    include('./Partials/footer.php');
 ?>