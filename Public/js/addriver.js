
$(document).ready(function() {
  $("Form").submit(function(event) {
     event.preventDefault();
           const  data = { 
            name:  $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            date: $('#date').val(),
            photo: $('#img').val(),
            status:$('#status').val()
       };
       console.log(data)

       $.ajax({
          url: '/CarManagings/Routes/driverrouter.php?action=adddriver',
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
