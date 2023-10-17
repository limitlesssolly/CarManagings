<!DOCTYPE html>

<head>
    <link rel="icon" href="../../Public/Images/logodowns.png" type="image/gif">
    <link rel="stylesheet" href="../../Public/CSS/profile.css">
    <link rel="stylesheet" href="../../Public/CSS/editprofile.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <?php
    include('../../Views/Partials/sidebar.php');
    ?>
    <div class="main">

        </head>
        <h2>EDIT PROFILE</h2>
        <div class="card">
            <div class="card-body">
                <a class="button touch save" href="#"></a>
                <a class="button touch cancel" href="../../Views/Pages/profile.php"></a>
                <table>
                    <tbody>
                        <tr>
                            <td><ul class="inputstyle"> <input type="text" placeholder="First Name" /></ul></td>

                        </tr>
                        <tr>
                            <td> <ul class="inputstyle"><input type="text" placeholder="Last Name" /></ul></td>

                        </tr>
                        <tr>
                            <td> <ul class="inputstyle"><input type="text" placeholder="Email Address" /></ul>
                            </td>

                        </tr>
                        <tr>
                            <td> <ul class="inputstyle"><input type="text" placeholder="Address" /></ul>
                            </td>
                        </tr>
                        <tr>
                            <td> <ul class="inputstyle"><input type="phone" placeholder="Phone" /></ul>
                            </td>
                        </tr>
                        <tr>
                            <td><ul class="inputstyle"> <input type="password" placeholder="Password" /></ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</body>

</html>