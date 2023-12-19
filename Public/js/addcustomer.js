$(document).ready(function() {
    $("form").submit(function(event) {
       event.preventDefault();
       const data = { 
          name: $('#name').val(),
          email: $('#email').val(),
          phone: $('#phone').val(),
          pass: $('#pass').val(),
          confirmpass: $('#confirmpass').val(),
       };
       
       $.ajax({
          url: '/CarManagings/Routes/customerrouter.php?action=addcustomer', // Adjust the URL to your customer route
          type: 'post',
          data: data,
          success: function(response) {
            console.log(response);
            if (response.trim() == "successful") {
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
              }, 5000);

              $('.close-btn').click(function(){
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
              });
            } else {
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
