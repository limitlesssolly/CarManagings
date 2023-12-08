<?php
require_once("../../../App/Models/users.php");
require_once("../../../App/Controllers/UserControllers.php");
require_once("../../../Views/View.php");
$model = new User();
$controller = new UsersController($model);
session_start();
$id=$_SESSION["id"];
if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}
// if(isset($_POST['edit']))	{
//     $name=$_REQUEST["Name"];
// 	$email=$_REQUEST["Email"];
//     $phone=$_REQUEST["Phone"];
// 	$password=$_REQUEST["Password"];
//     $sql= "UPDATE `users` SET `Name`='[$name]',`Email`='[$email]',`Phone`='[$phone]',`Pass`='[$password]' WHERE `id`='[$id]'  ";
// 	$dbh = new Dbh();
// 	$result = $dbh->query($sql);
// 	if ($result){
// 		$row = $dbh->fetchRow($result);
// 		$_SESSION["Name"]=$row["Name"];
// 		$_SESSION["Email"]=$row["Email"];
// 		$_SESSION["Phone"]=$row["Phone"];
// 		$_SESSION["Password"]=$row["Pass"];
// 		header("Location:profile.php");
// 	}else{
// 		echo ("ERRORR");
// 	}
// }
// if (isset($_GET['action']) && !empty($_GET['action'])) {
// 	switch($_GET['action']){
// 		case 'edit':
// 			$controller->edit();
// 			break;
//         	}
// }
// else{
//     echo("ERRORRRRRrr");
// }
?>

<!DOCTYPE html>

<head>

    <link rel="icon" href="../../../Public/Images/logodowns.png" type="image/gif">

    <link rel="stylesheet" href="../../../Public/CSS/P.css">
    <link rel="stylesheet" href="../../../Public/CSS/P2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>

    <?php
    include('../../Partials/sidebar.php');

    ?>

    <section class="user">

        <div class="user_options-container">

            <div class="user_options-text">

                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">Update Profile Info?</h2>
                    <button class="user_unregistered-signup" id="signup-button">Update</button>
                </div>

                <div class="user_options-registered">

                    <h2 class="user_registered-title">View Your Profile Info?</h2>
                    <button class="user_registered-login" id="login-button">View</button>

                    <form>
                        <button class="user_registered-login" id="login-button">Delete Account</button>
                    </form>

                </div>

            </div>
            <form action="profile.php?action=view" method="post">

                <div class="user_options-forms" id="user_options-forms">

                    <div class="user_forms-login">

                        <h2 class="forms_title">Profile Info</h2>

                        <table class="rwd-table">
                            <tbody>

                                <tr>
                                    <td data-th="Supplier Code">
                                        <span class="fa fa-user"></span>
                                    </td>

                                    <td data-th="Supplier Code">
                                        <p style="font-size:18px">Name :</p>
                                    </td>

                                    <td data-th="Supplier Name">
                                        <p style="font-size:18px">
                                            <?php

                                            echo $_SESSION["Name"]; ?>
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td data-th="Supplier Code">
                                        <span class="fa fa-envelope"></span>
                                    </td>

                                    <td data-th="Supplier Code">
                                        <p style="font-size:18px"> Email : </p>
                                    </td>

                                    <td data-th="Supplier Name">
                                        <p style="font-size:18px">
                                            <?php
                                            echo $_SESSION["Email"];
                                            ?>
                                        </p>
                                </tr>
                                <tr>
                                    <td data-th="Supplier Code">
                                        <span class="fa fa-phone"></span>
                                    </td>

                                    <td data-th="Supplier Code">
                                        <p style="font-size:18px"> Phone : </p>
                                    </td>

                                    <td data-th="Supplier Name">
                                        <p style="font-size:18px">
                                            <?php
                                            echo $_SESSION["Phone"]; ?>
                                        </p>
                                </tr>

                            </tbody>
                        </table>
                    </div>
            </form>
            <div class="user_forms-signup">

                <h2 class="forms_title">Update Profile Info</h2>

                <div class="log">
                    <form action="profile.php?action=edit" method="post">

                        <div class="input-cont">
                            <input type="text" name="Name" required />
                            <label>Username</label>
                            <div class="border1"></div>
                        </div>

                        <div class="input-cont">
                            <input type="email" name="Email" required />
                            <label>Email</label>
                            <div class="border2"></div>
                        </div>

                        <div class="input-cont">
                            <input type="text" name="Phone" required />
                            <label>Phone</label>
                            <div class="border2"></div>
                        </div>

                        <div class="input-cont">
                            <input type="password" name="Password" id="Password" required />
                            <label>Password</label>
                            <div class="border2"></div>
                        </div>

                        <div class="input-cont">
                            <input type="password" name="confirm" id="confirmPassword" required />
                            <label>Confirm Password</label>
                            <div class="border2"></div>
                        </div>
                        <button type="submit" id="edit" name="submit" name="edit"class="user_registered-login2">Update</button>

                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <script>
        const signupButton = document.getElementById('signup-button'),
            loginButton = document.getElementById('login-button'),
            userForms = document.getElementById('user_options-forms')
        signupButton.addEventListener('click', () => {
            userForms.classList.remove('bounceRight')
            userForms.classList.add('bounceLeft')
        }, false)
        loginButton.addEventListener('click', () => {
            userForms.classList.remove('bounceLeft')
            userForms.classList.add('bounceRight')
        }, false)
    </script>

</body>

</html>