$(document).ready(function() {
    $("Form").submit(function(event) {
       event.preventDefault();
       const c = document.querySelector('#cash');
       const f = document.querySelector('#fawry');
             const  data = { 
              name:  $('#name').val(),
              email: $('#email').val(),
              phone: $('#phone').val(),
              comment: $('#comment').val(),
              cash: c.checked,
              fawry: f.checked
         };
         console.log(data)

         $.ajax({
            url: '/CarManagings/Routes/bookingrouter.php?action=secondvalidation',
            type: 'post',
            data: data,
            success:function(response){
              console.log(response)  
              if(response.trim() == "successful"){
  
                window.location.href = '/CarManagings/Views/Pages/checkout.php';
              }else{
                const error = JSON.parse(response);


                $("#nameerror").text(error.name); 
                $("#emailerror").text(error.email); 
                $("#phoneerror").text(error.phone); 
                $("#paymenterror").text(error.payment); 
              }
            }
          });
        //  window.location.href = '/CarManaging/Views/Pages/ourcars.php';
         
     
         });
     
     
 });