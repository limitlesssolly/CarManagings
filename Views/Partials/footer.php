<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<style>
    
*{
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Ubuntu', sans-serif;
}
footer{
    position: fixed;
    width: 100%;
    height: 50%;
    bottom:0;
    left:0;
    background: #4c8bc5; 
    color: white;
    text-align: center;
    font-size: medium;
}
a{
    text-decoration: none;
    color: #ffffff;
}
a:hover{
    text-decoration: underline;
}

.info{
    text-align: center;
    justify-content: center;
    align-items: center;
    width: 20em;
    overflow: visible;
    text-overflow: ellipsis;
    position: fixed;
    right:70%;
    top:55%;
}
.linking{
    text-align: center;
    justify-content: center;
    align-items: center;
    width: 20em;
    overflow: visible;
    text-overflow: ellipsis;
    position: fixed;
    right:40%;
    top:55%;
}
.socials{
    text-align: center;
    justify-content: center;
    align-items: center; 
    position: fixed;
    right:15%;
    top:60%;
}
.copyrights{
    color: white;
    background-color: #2a4f71;
    text-align: center;
    padding: 1%;
    position: fixed;
    bottom:0;
    left:0;
    width:100%;
    height:7%;
}

</style>
<body>
    
    <footer>
    <!-- <img src="/images/thewhiteicon.png" alt="Tamarai Logo"> -->
            <div class="info">
                <h2>USEFUL INFO</h2>
                <ul>Tax Registration Number : 849-934-698<br></ul>
                <ul>Main Address: <br> Alexandria - New Miami - Behind Marseilia Company,<br> next to the European Center for Car Maintenance</ul>
            </div>
            <div class="linking">
                <h2>SOME LINKS</h2>
                <ul><a href="#">Privacy policy</a></ul>
                <ul><a href="#">Terms and conditions</a></ul>
                <ul><a href="#">Register as a new member</a></ul>
            </div>
            <div class="socials">
                <ul><a href="#"><i class="bx bxl-linkedin-square"></i>Linkedin</a></ul>
                <ul><a href="#"><i class="bx bxl-facebook-square"></i>Facebook</a></ul>
                <ul><a href="#"><i class="bx bxl-instagram-alt"></i>Instagram</a></ul>
                <ul><a href="#"><i class="bx bxl-github"></i>Github</a></ul>
            </div>
            <div class="copyrights">
                24 Seven Limousine, All rights reserved
            </div>
    </footer>
</body>
</html>
