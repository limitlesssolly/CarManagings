<!DOCTYPE html>

<head>

    <link rel="icon" href="../../Public/Images/logodowns.png" type="image/gif">
    <link rel="stylesheet" href="../../Public/CSS/p.css">
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
                <div class="user_forms-login" style="padding: 50px 20px;">
                    <h2 class="forms_title">Profile Info</h2>

                    <form class="forms_form">
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <div class="forms_field-input">
                                    <span class="fa fa-user"></span>

                                     Name: Client1
                                </div>
                            </div>
                            <div class="forms_field">
                                <div class="forms_field-input">
                                <span class="fa fa-envelope"></span>

                                    Email: Client1@gmail.com
                                </div>
                            </div>
                            <div class="forms_field">
                                <div class="forms_field-input">
                                <span class="fa fa-house"></span>

                                    Address: Client1Adrres
                                </div>
                            </div>
                            <div class="forms_field">
                                <div class="forms_field-input">
                                    <span class="fa fa-phone"></span>

                                    Phone Number: 0123456789
                                </div>
                            </div>

                        </fieldset>

                    </form>
                </div>
                <div class="user_forms-signup">
                    <h2 class="forms_title">Update Profile Info</h2>
                    <form class="forms_form">
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">

                                <input type="text" placeholder="First Name" class="forms_field-input" />
                            </div>
                            <div class="forms_field">

                                <input type="text" placeholder="Last Name" class="forms_field-input" />
                            </div>
                            <div class="forms_field">
                                <input type="email" placeholder="Email" class="forms_field-input" />
                            </div>
                            <div class="forms_field">
                                <input type="text" placeholder="Address" class="forms_field-input" />
                            </div>
                            <div class="forms_field">

                                <input type="text" placeholder="Phone Number" class="forms_field-input" />
                            </div>
                            <div class="forms_field">
                                <input type="password" placeholder="Password" class="forms_field-input" required />
                            </div>
                            <div class="forms_field">
                                <input type="password" placeholder="New Password" class="forms_field-input" />
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <input type="submit" value="Update info" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        const signupButton = document.getElementById('signup-button'),
            loginButton = document.getElementById('login-button'),
            userForms = document.getElementById('user_options-forms')

        /**
         * Add event listener to the "Sign Up" button
         */
        signupButton.addEventListener('click', () => {
            userForms.classList.remove('bounceRight')
            userForms.classList.add('bounceLeft')
        }, false)

        /**
         * Add event listener to the "Login" button
         */
        loginButton.addEventListener('click', () => {
            userForms.classList.remove('bounceLeft')
            userForms.classList.add('bounceRight')
        }, false)
    </script>
</body>

</html>