$(document).ready(function() {
    $("Form").submit(function(event) {
       event.preventDefault();
             const  data = { 
              start:  $('#start').val(),
              end: $('#end').val(),
              distance: $('#distance').val(),
              date: $('#datePicker').val(),
              time: $('#timePicker').val(),
         };
         console.log(data)

         $.ajax({
            url: '/CarManaging/bookingrouter.php?action=firstvalidation',
            type: 'post',
            data: data,
            success:function(response){
              
              if(response.trim() == "successful"){
                // alert(response);
                window.location.href = '/CarManaging/Views/Pages/ourcars.php';
              }else{
               
              }
            }
          });
        //  window.location.href = '/CarManaging/Views/Pages/ourcars.php';
         
     
         });
     
     
 });