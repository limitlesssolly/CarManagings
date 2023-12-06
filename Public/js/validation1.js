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
            url: '/CarManagings/Routes/bookingrouter.php?action=firstvalidation',
            type: 'post',
            data: data,
            success:function(response){
              console.log(response)  
              if(response.trim() == "successful"){
  
                window.location.href = '/CarManagings/Views/Pages/ourcars.php';
              }else{
                const error = JSON.parse(response);
  
                if(error.dist !=''){
                    $("#locerror").text(error.dist);
                }
               else if(error.start !='')
                {
                    $("#locerror").text(error.start);
                }else if(error.end !=''){
                    $("#locerror").text(error.end); 
                }else{
                    $("#locerror").text('');
                }
  
                $("#dateerror").text(error.date); 
                $("#timeerror").text(error.time); 
  
               
              }
            }
          });
        //  window.location.href = '/CarManaging/Views/Pages/ourcars.php';
         
     
         });
     
     
  });