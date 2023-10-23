const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
		
		$(document).ready(function() {
    $("#confirmPassword").keyup(function() {
      var password = $("#password").val();
      var confirmPassword = $(this).val();
      if(password.length())
      {
        $("#passwordValidation").html("Password less than 8 charcters").css("color", "red");
        document.getElementById('sign').disabled = true;	
      }

      if (password !== confirmPassword) {
        $("#passwordValidationMessage").html("Passwords do not match.").css("color", "red");
		document.getElementById('sign').disabled = true;		

      } else {
        $("#passwordValidationMessage").html("");
		document.getElementById('sign').disabled = false;	
      }
    });
  });

  $(document).ready(function() {
    $("#password").keyup(function() {
      var password = $(this).val();
      if(password.length<8)
      {
        $("#passwordValidation").html("Password less than 8 charcters").css("color", "red");
        document.getElementById('sign').disabled = true;	
      }
      else
      {
        $("#passwordValidation").html("");
        document.getElementById('sign').disabled = false;
      }
    });
  });