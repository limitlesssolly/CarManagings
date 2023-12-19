
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../Public/CSS/adddrivers.css"> -->
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../Public/CSS/alert.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Edit-Driver</title>
</head>

<style>
    * {
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Ubuntu', sans-serif;
    /* margin:2px 0px;  */
    padding:0px;
    text-align:center;
}
body{
    overflow: hidden;
}
.container {
    position: relative;
    max-width: 500px;
    margin-left: 30%;
    /* margin-top: 30px;  */
    margin-bottom: 30px;
    padding: 20px 40px;
   
    background-color: white; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    
}
h1{
    font-size: 30px;
    color:black;
} 
.title {
    text-align: center;
    font-size: 3vh;
}

 form {
    text-align: center;
    /* margin-top: -5px; */
}

input[type=text],
input[type=email],
select,
textarea {
    width: 100%;
    padding: 7px;
    border: 1px solid #01051c;
    border-radius: 4px;
    resize: vertical;
    margin: 10px;
}

label {
    padding: 10px 10px 10px 10px;
    display: inline-block;
}

button {
    font-size: 17px;
    width: 200px;
    background: transparent;
    color: #000;
    text-decoration: none;
    font-family: 500;
    border: none;
    padding: 15px 29px;
    border: 1px solid rgb(1, 5, 28);
    border-radius: 4px;
    transition: 0.9s;
    position: relative;
    right: 0%;
    cursor: pointer;
}

button:hover {
    background: #01051c;
    letter-spacing: 3px;
    color: #fff;

}
</style>

<body>
    <?php
    include("../../Partials/dashboardsidebar.php");
    ?>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Dashboard</span>
        </div>
        <div class="alert hide"> 
                        <span class="fas fa-check-circle"></span>
                        <span class="msg">Updated Successfully!</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
        </div>
        <div class="adddrivers">
            <section>
                <div class="container" >
                    <h1>Update Ride Details</h1>
                    <form action="editdrivers.php?action=edit" method="post">
                      <div class="id">
                            <label >Ride ID</label>
                            <input type="text" class="field" name="name" id='rideid' > <br>
                        </div>

                        <div class="id">
                            <label >Driver ID</label>
                            <input type="text" class="field" name="name" id='driverid' > <br>
                        </div>
                        <div class="id">
                            <label >Car ID</label>
                            <input type="text" class="field" name="name" id='carid' > <br>
                        </div>
                        <div class="status">
                            
                            <label >Status</label>
                            <input type="text" class="field" name="status" id='status' >                           

                        </div>

                        <div class="subs">
                            <button type="submit" name="submit">edit </button>
                        </div>
                    </form>
                    <script src="../../../Public/js/editRide.js"></script>
                </div>
            </section>
        </div>
    </section>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent)
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close")
        })


    </script>

</body>

</html>