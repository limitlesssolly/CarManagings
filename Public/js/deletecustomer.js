
$(document).ready(function() {
    $("form").submit(function(event) {
       event.preventDefault();
       var Id = event.originalEvent.submitter.id;
             const  data = { 
              id:Id,
         };
         console.log(data)
         $.ajax({
            url: '/CarManagings/Routes/customerrouter.php?action=deletecustomer',
            type: 'post',
            data: data,
            success:function(response){
              console.log(response)  
              if(response.trim() == "successful"){
                  $('.alert').addClass("show");
                  $('.alert').removeClass("hide");
                  $('.alert').addClass("showAlert");
                  setTimeout(function(){
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                  },1200);
                  setTimeout(function() {
                    // Redirect to the specified URL
                    window.location.href = '/CarManagings/Routes/customerrouter.php?action=customers';
                }, 1200); 
                  
                $('.close-btn').click(function(){
                  $('.alert').removeClass("show");
                  $('.alert').addClass("hide");
                });
          }
            }
          });
         
         });
     
     
  });
  