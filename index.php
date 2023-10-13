<html>
<head>
<title>HomePage</title>
</head>
<?php
session_start();

if(!empty($_SESSION['ID'])) {
	echo "<h1>Welcome ".$_SESSION['Name']."</h1>";
	echo"<a href='rentyourcar.php'>rent car</a><br><br>";
}
else{
	echo "<h1>Welcome</h1>";
}
?>
</html>