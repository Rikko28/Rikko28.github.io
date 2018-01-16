<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registracija</title>
</head>
<body>
		<div>
			<div><input type="text" class="name" name="name" placeholder="vardas"></div>
			<div><input type="text" class="surname" name="surname" placeholder="pavarde" id="<?php $vardas ?> "></div>
			<div><input type="text" class="email" name="email" placeholder="el.pastas" id="<?php $vardas ?> "></div>
			<div><input type="text" class="password" name="password" placeholder="slaptazodis" id="<?php $vardas ?> " ></div>
			<div><input type="text" class="password2" name="cpassword" placeholder="pakartoti slaptazodi" id="<?php $vardas ?>"></div> <!-- name naudojamas register.-->
			<div class="reg">registruotis</div>
		</div>
	<p></p>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="checker.js"></script>
</body>
</html>