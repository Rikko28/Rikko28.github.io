$(document).ready(function(){
	$('.login').click(function(){
		var namex = $('input[name=name]');
		var name = namex.val();
		var passwordx = $('input[name=password]');
		var password = passwordx.val();
		$.ajax({
	url: 'logch.php',
   type: 'POST',
   data: {name, password},
   dataType: 'json',
   success: function(response){
   	 a=response.error;
   	 if (a=="emptyname") {
   	 	$('#klaida').html('iveskite varda');
document.getElementById("message").style.display = "block";
   	 } else if (a=="emptypw"){
   	 	$('#klaida').html('iveskite slaptazodi');
   	 	document.getElementById("message").style.display = "block";
   	 } else if (a=="incorrect") {
   	 	$('#klaida').html('Neteisingai ivesti duomenys');
   	 	document.getElementById("message").style.display = "block";
   	 } else {
   	 	window.location.replace("http://stackoverflow.com");
   	 	document.getElementById("message").style.display = "none";
   	 }
   	
   }





  });

	});
});