
$(document).ready(function() {
    $("Form").submit(function(event) {
       event.preventDefault();
             const  data = { 
              rideid:$('#rideid').val(),
              carid:$('#carid').val(),
              driverid:$('#driverid').val(),
         };
         console.log(data)
  
         $.ajax({
            url: '/CarManagings/Routes/dashboardrouter.php?action=assigndrivercar',
            type: 'post',
            data: data,
            success:function(response){
              console.log(response)  
              if(response.trim() == "successful"){
                $("#nameerror").text(''); 
                $("#emailerror").text(''); 
                $("#phoneerror").text(''); 
                $("#statuserror").text(''); 
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
                $("#statuserror").text(error.status); 
              }
            }
          });
         
         });
     
     
  });
  