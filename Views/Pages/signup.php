<?php
include_once "../../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="../../Public/CSS/style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="icon" href="../../Public/Images/logodowns.png" type="image/gif">

</head>

<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">

			<form method="POST">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" placeholder="Name" name="Name" />
				<input type="email" placeholder="Email" name="Email" />
				<input type="text" placeholder="Phone" name="Phone" />
				<input type="password" placeholder="Password" name="Pass" />
				<input type="password" placeholder="Confirm Password" name="Confirmpassword" />

				<button type="submit">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form method="POST">
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
			 if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 	$name = htmlspecialchars($_POST["Name"]);
				$email = htmlspecialchars($_POST["Email"]);
			 	$phone = htmlspecialchars($_POST["Phone"]);
			 	$password = htmlspecialchars($_POST["Pass"]);
				 $Confirmpassword = htmlspecialchars($_POST["Confirmpassword"]);
				 if ($_POST['Pass']!= $_POST['Confirmpassword'])
				 {
					echo "<h3> Oops! Password did not match! Try again.</h3>";

				}
				 else{	
				 $sql = "insert into users(Name,Email,Phone,Pass) 
			 		values('$name','$email','$phone','$password')";
			 	$result = mysqli_query($conn, $sql);
				 
			 	if($result)
			 	{
			 		echo "<h3> Account successfully created! Sign in now.</h3>";
			 	}
			 	else{
			 		echo "<h3> We seem to be facing an issue currently try again l8r :c </h3>";
				}
			}
			 }
			 
			?>
	<?php
			// if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// $email = $_POST['Email'];  
			// $password = $_POST['Pass'];  
			
			// $email = mysqli_real_escape_string($conn, $email);  
			// $password = mysqli_real_escape_string($conn, $password);  
			
			// $sql = "SELECT * FROM users WHERE Email = '$email' AND Pass = '$password'";  
			// $result = mysqli_query($conn, $sql);  
			// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
			// $count = mysqli_num_rows($result);  
			
			// if($count == 1){  
			// 	header("Location:index.php");
			// }  
			// else{  
			// 	echo "<h3> Login failed. Invalid username or password.</h3>";  
			// }}  
			?>
	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>

</body>

</html>