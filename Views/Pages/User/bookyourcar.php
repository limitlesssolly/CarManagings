<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="../../Public/CSS/styles.css">
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- end -->

  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="../../../Public/CSS/navbar.css">
  <link rel="stylesheet" href="../../../Public/CSS/bookyourcar.css">
  <link rel="stylesheet" href="../../../Public/CSS/footer.css">
  <!-- <link rel="stylesheet" href="../../../Public/CSS/style.css"> -->

  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <!-- <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script> -->
  <script src="../../Public/js/mapbox.js"></script>

  <link rel="stylesheet" href="style.css">

  <title>Book Your Car</title>
  <style>
    body {
      margin: 0;
    }

    #map {
      height: 65vh;
      width: 30vw;
    }

    #home::before {

      width: 0%;

    }

    #book::before {
      width: 100%;
    }
  </style>
  <script src="../../Public/js/script.js" defer></script>

</head>

<body>

  <?php
  include "../../Partials/navbar.php";
  ?>

  <section>
    <div class="bodyimage">
      <img src="../../../Public/Images/carr.jpg" alt="">
    </div>
  </section>

  <div class='container'>
    <div class='box'>
      <div id='map'></div>
    </div>
    <div class='box-2'>
      <form action="../../bookingrouter.php?action=firstvalidation" method="post" id="Form">
        <input type="hidden" name='start' id='start'>
        <input type="hidden" name='end' id='end'>
        <input type="hidden" name='distance' id='distance'>
        <div class='date'>
          <label for='datePicker'>Select your pickup Date:</label>
          <input type='text' name='date' id='datePicker' class='form-control'>
        </div>
        <div class='time'>
          <label for='timePicker'>Select your pickup Time:</label>
          <input type='time' name='time' id='timePicker' class='form-control'>
        </div>
        <input type='submit' value='NEXT' name='NEXT' id='submit'>
      </form>
      <script src="../../Public/js/validation.js"></script>
      <h3>
        <?php if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
        } ?>
      </h3>
    </div>

  </div>
  <script>
    $(document).ready(function () {
      $('#datePicker').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoApply: true,
        startDate: moment(),
        locale: {
          format: 'MM/DD/YYYY',
        }
      });
    });
  </script>
  <div class="pagination">
    <ul>
      <li class="numb active">1</li>
      <li class="numb">2</li>
      <li class="numb">3</li>
      <li class="numb">4</li>
    </ul>
  </div>

  <?php
  include "../../Partials/footer.php";
  ?>
  <!-- <script >

// Get the parent div element
  var parentDiv = document.querySelector('.mapbox-directions-component.mapbox-directions-route-summary');

// Get the h1 element inside the parent div
  var h1Element = parentDiv.querySelector('h1');
  var distance=document.getElementsByClassName('distance')
  distance.innerHTML = 'New HTML Content';
  document.getElementById("distance").innerHTML = "I nged!";
    
// Get the value of the h1 element
  var h1Value = h1Element.textContent;

   console.log(h1Value);

</script> -->
</body>


</html>