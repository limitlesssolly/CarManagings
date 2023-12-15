
$(document).ready(function() {
    $("Form").submit(function(event) {
       event.preventDefault();
             const  data = { 
              name:  $('#name').val(),
              email: $('#email').val(),
              phone: $('#phone').val(),
              pass: $('#pass').val(),
              confirmpass: $('#confirmpass').val(),
         };
         console.log(data)
         $.ajax({
            url: '/CarManagings/Routes/adminrouter.php?action=addadmin',
            type: 'post',
            data: data,
            success:function(response){
              console.log(response)  
              if(response.trim() == "successful"){
                $("#nameerror").text(''); 
                $("#emailerror").text(''); 
                $("#phoneerror").text(''); 
                $("#passerror").text(''); 
                $("#confirmpasserror").text(''); 
                  $('.alert').addClass("show");
                  $('.alert').removeClass("hide");
                  $('.alert').addClass("showAlert");
                  setTimeout(function(){
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                  },5000);
  
                $('.close-btn').click(function(){
                  $('.alert').removeClass("show");
                  $('.alert').addClass("hide");
                });

          }else{
                const error = JSON.parse(response);
                $("#nameerror").text(error.name); 
                $("#emailerror").text(error.email); 
                $("#phoneerror").text(error.phone); 
                $("#passerror").text(error.pass);
                $("#confirmpasserror").text(error.confirmpass); 
              }
            }
          });
         
         });
     
     
  });
  