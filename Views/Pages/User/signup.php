<?php
require_once("../../../App/Models/users.php");
require_once("../../../App/Controllers/UserControllers.php");

$model = new User();
$controller = new UsersController($model);
session_start();

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

if (isset($_POST['login'])) {
    $email = $_REQUEST["Email"];
    $password = $_REQUEST["Password"];
    $sql = "SELECT * FROM users WHERE Email='$email' AND Pass='$password'";
    $dbh = new Dbh();
    $result = $dbh->query($sql);

    if ($result) {
        $row = $dbh->fetchRow($result);

        // Check if the user type is 'admin'
        if ($row["Type"] === 'admin') {
            // Admin can access both the dashboard and normal pages
            $_SESSION["id"] = $row["id"];
            $_SESSION["Name"] = $row["Name"];
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Phone"] = $row["Phone"];
            $_SESSION["Password"] = $row["Pass"];
            header("Location: ../Admin/dashboard.php");
            exit;
        } else {
            // For other user types, you can handle different redirects or logic
            $_SESSION["id"] = $row["id"];
            $_SESSION["Name"] = $row["Name"];
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Phone"] = $row["Phone"];
            $_SESSION["Password"] = $row["Pass"];
            header("Location: profile.php");
            exit;
        }
    } else {
        echo "ERROR";
    }
}
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

			<form action="signup.php?action=insert" method="post">

				<h1>Create Account</h1>

				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				</div>

				<span>or use your email for registration</span>
				<input type="text" placeholder="Name" name="Name" required />
				<input type="email" placeholder="Email" name="Email" required />
				<input type="text" placeholder="Phone" name="Phone" required />
				<input type="password" placeholder="Password" name="Password" id="password" required />
				<span id="passwordValidation"></span>
				<input type="password" placeholder="Confirm Password" name="confirm" id="confirmPassword" required />
				<span id="passwordValidationMessage"></span>

				<button type="submit" id="sign"name="submit">Sign Up</button>
			</form>

		</div>

		<div class="form-container sign-in-container">

			<form action="signup.php" method="post">

				<h1>Sign in</h1>

				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				</div>

				<span>or use your account</span>
				<input type="email" placeholder="Email" name="Email" />
				<input type="password" placeholder="Password" name="Password" />
				<a href="#">Forgot your password?</a>

				<button type="submit" name="login"name="submit" onclick="validateForm()">Sign In</button>
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="../../../Public/js/signup.js"></script>
<script>
	  function validateForm() {
            var email = document.getElementById('Email').value;
            var password = document.getElementById('Password').value;
            if (email.trim() === '' || password.trim() === '') {
                alert('Please enter both email and password.');
            } else {
                alert('Sign-in successful!');
                // document.getElementById('loginForm').submit(); 
            }
        }
	</script>
	</head>

</body>

</html>