
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="../../../Public/CSS/adddrivers.css">
    <link rel="stylesheet" href="../../../Public/CSS/dashboard.css">
    <link rel="stylesheet" href="../../../Public/CSS/alert.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Add Car</title>
    <style>
        .container{
            margin-top: -50px;
            margin-left: 27.8%;
        }
        body{
            overflow: hidden;
        }
    </style>
</head>

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
                        <span class="msg">Added Successfully!</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
        </div>
        <div class="adddrivers">
            <section>
                <div class="container">
                    <h1>Add Car</h1>

     
                    <form >

                        <div class="name">
                            <label >Car Name</label>
                            <input type="text" class="field" id="name"  placeholder="toyota" required> <br>
                            <p id='nameerror' style="color: red;"></p>
                        </div>

                        <div class="contactinfo">
                            <label >Car Type</label>
                            <input type="text" class="field" id='type'    placeholder="SUV,SEDAN,HIACE"
                                required>
                            <p id='emailerror' style="color: red;"></p>
                        </div>

                        <div class="contactinfo">
                            <label >Car Plate</label>
                            <input type="text" class="field" id='plate'   placeholder="123 | ن ص ع" required>
                            <p id='phoneerror' style="color: red;"></p>
                        </div>

                        <div class="status">
                            <label >Car Color </label>
                            <input type="text" class="field" id='color'  required> <br>
                            
                            <label >Status</label>
                            <input type="text" class="field" id='status'   placeholder="available,in trip"
                                required>
                                <p id='statuserror' style="color: red;"></p>
      
                        </div>

 
                        <div class="subs">
                            <button type="submit" id="sign" name="submit">Add </button>
                        </div>
              
                    </form>
                    <script src="../../../Public/js/addcar.js"></script>
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