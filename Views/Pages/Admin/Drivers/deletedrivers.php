<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/CSS/drivers.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Drivers</title>
</head>

<body>
    <?php
    include("../../../Partials/dashboardsidebar.php");
    ?>
    <div class="drivers">
            <h3>All Drivers</h3>
        <section class="tbod">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Anwar </td>
                        <td> <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> Mohsen </td>
                        <td> <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> Marwan </td>
                        <td> <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                    <td> 4 </td>
                        <td> Loay </td>
                        <td> <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                    <td> 5 </td>
                        <td> Bayoumi </td>
                        <td> <a href="#">Delete</a></td>
                    </tr>
                    
                </tbody>
                <script src="../../../../Public/js/carshowdash.js"></script>
            </table>

        </section>
    </div>
    <script>
            let arrow = document.querySelectorAll(".arrow");
            for(var i=0;i<arrow.length;i++){
                arrow[i].addEventListener("click",(e)=>{
                    let arrowParent=e.target.parentElement.parentElement;
                    console.log(arrowParent)
                    arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar=document.querySelector(".sidebar");
            let sidebarBtn=document.querySelector(".bx-menu");
            sidebarBtn.addEventListener("click",()=>{
                sidebar.classList.toggle("close")
            })


        </script>
</body>

</html>