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
                                <p style="font-size:18px">  Client1 </p>
                                </td>

                            </tr>
                            <tr>
                            <td data-th="Supplier Code">
                            <span class="fa fa-envelope"></span>

                            </td>
                                <td data-th="Supplier Code">
                                <p style="font-size:18px">  Email</p>
                                </td>
                                <td data-th="Supplier Name">
                                <p style="font-size:18px">     Client1@email.com</p>

                            </tr>
                            <tr>
                            <td data-th="Supplier Code">
                            <span class="fa fa-phone"></span>

                            </td>
                                <td data-th="Supplier Code">
                                <p style="font-size:18px">   Phone</p>
                                </td>
                                <td data-th="Supplier Name">
                                <p style="font-size:18px">     012456789 </#000</td>

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
                                <label>Username</label>
                                <div class="border1"></div>
                            </div>
                            <div class="input-cont">
                                <input type="email">
                                <label>Email</label>
                                <div class="border2"></div>
                            </div>
                            <div class="input-cont">
                                <input type="text">
                                <label>Phone</label>
                                <div class="border2"></div>
                            </div>
                            <div class="input-cont">
                                <input type="password">
                                <label>Password</label>
                                <div class="border2"></div>
                            </div>
                            <div class="input-cont">
                                <input type="password">
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