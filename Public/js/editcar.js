
$(document).ready(function() {
    $("Form").submit(function(event) {
       event.preventDefault();
       const  data = { 
        id:$('#id').val(),
        name:  $('#name').val(),
        type: $('#type').val(),
        plate: $('#plate').val(),
        color: $('#color').val(),
        status: $('#status').val(),

   };
         console.log(data)
  
         $.ajax({
            url: '/CarManagings/Routes/CarsRouter.php?action=editcar',
            type: 'post',
            data: data,
            success:function(response){

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
                // const error = JSON.parse(response);
                console.log(response)
  
              //   $("#nameerror").text(error.name); 
              //   $("#emailerror").text(error.email); 
              //   $("#phoneerror").text(error.phone); 
              //   $("#statuserror").text(error.status); 
              }
            }
          });
         
         });
     
     
  });
  