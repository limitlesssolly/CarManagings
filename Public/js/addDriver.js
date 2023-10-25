$(document).ready(function() {
    $("#email").keyup(function() {
      var email = $("#email").val();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (emailRegex.test(email)) {
        $("#Validation").html("");
		document.getElementById('sign').disabled = false;
      } else {
        $("#Validation").html("Please enter a valid email").css("color", "red");
		document.getElementById('sign').disabled = true;		
      }
    });
  });
