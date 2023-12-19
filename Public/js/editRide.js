
$(document).ready(function() {
    $("form").submit(function(event) {
       event.preventDefault();
       const  data = { 
        rideid:$('#rideid').val(),
        carid:$('#carid').val(),
        driverid:$('#driverid').val(),
        status:$('#status').val(),
   };

         console.log(data)
  
         $.ajax({
            url: '/CarManagings/Routes/dashboardrouter.php?action=editride',
            type: 'post',
            data: data,
            success:function(response){
              console.log(response)  
 
                  $('.alert').addClass("show");
                  $('.alert').removeClass("hide");
                  $('.alert').addClass("showAlert");
                  setTimeout(function(){
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                  },1200);
                  setTimeout(function() {
                    // Redirect to the specified URL
                    window.location.href = '/CarManagings/Routes/dashboardrouter.php?action=rides';
                }, 1200); 
                  
                $('.close-btn').click(function(){
                  $('.alert').removeClass("show");
                  $('.alert').addClass("hide");
                });  
           
            }
          });
         
         });
     
  });
  