<?php
   session_start();
include_once "../../includes/db.php";


?>

<!DOCTYPE html>

<head>

    <link rel="icon" href="../../Public/Images/logodowns.png" type="image/gif">
    <link rel="stylesheet" href="../../Public/CSS/P.css">
    <link rel="stylesheet" href="../../Public/CSS/P2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<body>
    <?php
    include('../../Views/Partials/sidebar.php');
    ?>
    </head>
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
                    <button class="user_registered-login" id="login-button">Delete Account</button>
                </div>
            </div>
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

                                    <p style="font-size:18px">Name</p>
                                </td>
                                <td data-th="Supplier Name">
                                    <p style="font-size:18px">
                                        <?php 
                                    //  echo   $_SESSION["Name"] 
                                     ?>
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td data-th="Supplier Code">
                                    <span class="fa fa-envelope"></span>

                                </td>
                                <td data-th="Supplier Code">
                                    <p style="font-size:18px"> Email</p>
                                </td>
                                <td data-th="Supplier Name">
                                    <p style="font-size:18px"> 
                                    <?php 
                                    //  echo   $_SESSION["Email"] 
                                     ?>
                                     </p>

                            </tr>
                            <tr>
                                <td data-th="Supplier Code">
                                    <span class="fa fa-phone"></span>

                                </td>
                                <td data-th="Supplier Code">
                                    <p style="font-size:18px"> Phone</p>
                                </td>
                                <td data-th="Supplier Name">
                                    <p style="font-size:18px"> 
                                    <?php 
                                    //  echo   $_SESSION["Phone"]
                                      ?>
                                     </p>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="user_forms-signup">
                    <h2 class="forms_title">Update Profile Info</h2>

                    <div class="log">
                        <form>
                            <div class="input-cont">
                            <input type="text">

                                <!-- <input type="text" value="
                                <?
                                // =$_SESSION['Name']?>
                                " name='Name'> -->
                                <label>Username</label>
                                <div class="border1"></div>
                            </div>
                            <div class="input-cont">
                            <input type="email">

                                <!-- <input type="email" value="
                                <?
                                // =$_SESSION['Email']
                                ?>" name='Email'> -->
                                <label>Email</label>
                                <div class="border2"></div>
                            </div>
                            <div class="input-cont">
                            <input type="text">

                                <!-- <input type="text" value="
                                <?
                                // =$_SESSION['Phone']
                                ?>" name='Phone'> -->
                                <label>Phone</label>
                                <div class="border2"></div>
                            </div>
                            <div class="input-cont">
                            <input type="password">

                                <!-- <input type="password" value=" -->
                                <?
                                // =$_SESSION['Pass']
                                ?>
                                <!-- " name='Pass'> -->
                                <label>Password</label>
                                <div class="border2"></div>
                            </div>
                            <div class="input-cont">
                                <input type="password">
                                <!-- <input type="password" value="
                                <?
                                // $_SESSION['Confirmpassword']
                                ?>
                                " name='Confirmpassword'> -->
                                <label>Confirm Password</label>
                                <div class="border2"></div>
                            </div>
                            <button class="user_registered-login2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <?php
// if($_SERVER['REQUEST_METHOD']== "POST"){ //check if form was submitted
// 	//check if form is submitted 
// 	$name=htmlspecialchars($_POST["Name"]);
// 	$email=htmlspecialchars($_POST["Email"]);
// 	$phone=htmlspecialchars($_POST["Phone"]);
// 	$password=htmlspecialchars($_POST["Pass"]);
//     $Confirmpassword = htmlspecialchars($_POST["Confirmpassword"]);
//     if ($_POST['Pass']!= $_POST['Confirmpassword'])
//     {
//        echo "<h3> Oops! Password did not match! Try again.</h3>";

//    }else{
// 	$sql="update  users set Name='$name', Email='$email', Pass='$password'
// 	where ID =".$_SESSION['ID'];
// 	$result=mysqli_query($conn,$sql);
// 	if( $result) {
//         echo "<h3>Data Updated Succesfully!</h3>";
// 	} else {
//         echo "<h3> Oops!There is an error occured! Try again.</h3>";
// 	}
// }
	
// 	$conn->close();
// }
?>
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