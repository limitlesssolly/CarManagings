<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/CSS/footer2.css">
    <link rel="stylesheet" href="../../Public/CSS/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="../../Public/CSS/navbar2.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>                      

   
    <title>Home</title>
</head>
<body>

	<?php
session_start();

if(!empty($_SESSION['Email'])) {
	echo "<h1>Welcome ".$_SESSION['Name']."</h1>";
	echo"<a href='rentyourcar.php'>rent car</a><br><br>";
}
else{
	echo "<h1>Welcome</h1>";
}
?>
</body>
</html>