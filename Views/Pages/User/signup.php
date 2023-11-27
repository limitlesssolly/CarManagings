<?php
// include_once "../../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">

	<title>Sign Up</title>

	<link rel="icon" href="../../../Public/Images/logodowns.png" type="image/gif">

	<link rel="stylesheet" href="../../../Public/CSS/style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>

	<div class="container" id="container">

		<div class="form-container sign-up-container">

			<form method="POST" action="/signups">

				<h1>Create Account</h1>

				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				</div>

				<span>or use your email for registration</span>
				<input type="text" placeholder="Name" name="Name" required />
				<input type="email" placeholder="Email" name="Email" required />
				<input type="text" placeholder="Phone" name="Phone" required />
				<input type="password" placeholder="Password" name="Pass" id="password" required />
				<span id="passwordValidation"></span>
				<input type="password" placeholder="Confirm Password" name="confirm" id="confirmPassword" required />
				<span id="passwordValidationMessage"></span>

				<button type="submit" id="sign">Sign Up</button>
			</form>

		</div>

		<div class="form-container sign-in-container">

			<form method="POST" action="/home">

				<h1>Sign in</h1>

				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				</div>

				<span>or use your account</span>
				<input type="email" placeholder="Email" name="Email" />
				<input type="password" placeholder="Password" name="Pass" />
				<a href="#">Forgot your password?</a>

				<button type="submit">Sign In</button>
			</form>

		</div>

		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signIn">Sign In</button>

				</div>
				<div class="overlay-panel overlay-right">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>

	</div>

	<?php
	//  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// session_start();
	// require_once "../../includes/db.php";
	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// $email = $_POST['Email'];  
	// $password = $_POST['Pass'];  
	// $email = mysqli_real_escape_string($conn, $email);  
	// $password = mysqli_real_escape_string($conn, $password);  	
	// $sql = "SELECT * FROM users WHERE Email = '$email' AND Pass = '$password'";  
	// $result = mysqli_query($conn, $sql);  
	// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	// $count = mysqli_num_rows($result);  
	// if($row=mysqli_fetch_array($result)){
	// 	$_SESSION['Name']=$row['Name'];
	// 	$_SESSION['Email']=$row['Email'];
	// 	$_SESSION['Pass']=$row['Pass'];
	// 	$_SESSION['Phone']=$row['Phone'];
	// 	header("Location:index.php");
	//    }
	//    else{
	// 	echo "Invalid Input";
	//    }
	
	// if($count == 1){  
	// 	header("Location:index.php");
	// }  
	// else{  
	// 	echo "<h3> Login failed. Invalid username or password.</h3>";  
	// }}  
	?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="../../../Public/js/signup.js"></script>

	</head>

</body>

</html>