<!DOCTYPE html>
<html>
	<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input, .login {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
.login{
	background-color: #4CAF50;
    color: white;
    text-align: center;

}
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}
#message p {
    padding: 10px 35px;
    font-size: 18px;
}
.valid {
    color: green;
}
.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}
.invalid {
    color: red;
}
.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
</style>



		<meta charset="utf-8">
		<title>welcome screen</title>
	</head>
	<body>
		<div>
			<div><input type="text" name="name" placeholder="vardas" class="name"></div>
			<div><input type="password" name="password" placeholder="slaptazodis" class="name"></div>
			<div class="login " style="display: inline-block;"><span class="popuptext" id='myPopup'></span> login </div> <div class="registration" ><a href="registration.php"> registration </div></a>
		</div>
		
		<div id="message" >
			<p id=klaida class="invalid" ></p>
		</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="login.js"></script>


	</body>
</html>