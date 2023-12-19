
$(document).ready(function() {
    $("form").submit(function(event) {
       event.preventDefault();
       var Id = event.originalEvent.submitter.id;
       var elementClass = $(event.originalEvent.submitter).attr('class');

             const  data = { 
              id:Id,
         };

         console.log(data)
  
         $.ajax({
            url: '/CarManagings/Routes/dashboardrouter.php?action=cancelride',
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
  