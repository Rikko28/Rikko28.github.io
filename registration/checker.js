$(document).ready(function(){
	$('.reg').click(function(){
		var namex =$('input[name=name]');
		var name = namex.val();
		var surnamex =$('input[name=surname]');
		var surname = surnamex.val();
		var emailx =$('input[name=email]');
		var email = emailx.val();
		var passwordx =$('input[name=password]');
		var password = passwordx.val();
		var cpasswordx =$('input[name=cpassword]');
		var cpassword = cpasswordx.val();
		/*if (name =="") {
			alert('name is requ');
			return 0;
		} works too. You can check if a field is enetered here, or php*/
		$.ajax({
	url: 'register.php',
   type: 'POST',
   data: {name, surname, email, password, cpassword},
   dataType: 'json',
   success: function(response){
   	var res = response.error;
   	if(res == "success"){
   		window.location.replace("http://localhost/registration");
   	} else{


   	$('p').html(response.error)
   	}
   }

	});
	});

	
});