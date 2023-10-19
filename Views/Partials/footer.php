<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/jpg" href="../../Public/Images/logodowns.png" />
<!-- <link rel="stylesheet" href="../../Public/CSS/footer.css"> -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
<style>
    * {
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
        font-family: 'Roboto', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

    .foots {
        display: flex;
        background-color: #5c75f6;
        align-items: center;
        flex-flow: row wrap;
        justify-content: space-around;
        align-content: center;
    }

    .foots>div {
        text-align: center;
        font-size: 1rem;
        align-self: center;
    }

    .info{
        text-align: left;
        width: 300px;
        height: 170px;
        line-height: 23px;
        color: white;
    }

    .info>h2{
        text-align: center;
    }

    .linking{
        text-align: left;
        color: white;
    }

    .socials{
        text-align: left;
        color: white;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        text-decoration: underline; 
    }

    .copyrights {
        color: white;
        background-color: #4254af;
        text-align: center;
        padding: 1%;
        bottom: 0;
        left: 0;
        width: 100%;
    }

    @media (max-width: 800px) {
        .flex-container {
            flex-flow: column wrap;
        }
    }
</style>
<footer>
    <div class="foots">
        <div class="logo">
            <img src="../../Public/Images/whitelogotoo.png" alt="logo">
        </div>
        <div class="info">
            <h2>USEFUL INFO</h2>
            <p>Tax Registration Number : 849-934-698<br>
            Main Address: Alexandria - New Miami - Behind Marseilia Company, next to the European Center for Car Maintenance</p>
        </div>
        <div class="linking">
            <h2>SOME LINKS</h2>
            <ul><a href="#">Privacy policy</a></ul>
            <ul><a href="#">Terms and conditions</a></ul>
            <ul><a href="#">Register as a new member</a></ul>
        </div>
        <div class="socials">
            <h2>SOCIALS</h2>
            <ul><a href="#"><i class="bx bxl-linkedin-square"></i>Linkedin</a></ul>
            <ul><a href="#"><i class="bx bxl-facebook-square"></i>Facebook</a></ul>
            <ul><a href="#"><i class="bx bxl-instagram-alt"></i>Instagram</a></ul>
            <ul><a href="#"><i class="bx bxl-github"></i>Github</a></ul>
        </div>
        <div class="copyrights">
            24 Seven Limousine, All rights reserved
        </div>
    </div>
</footer>