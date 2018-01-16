<?php
$msg = array();

require "settings.php"; // ten nurodytas prisijungimas prie db
$sql = "INSERT INTO id(name, surname, email, password, cpassword)
		VALUES (?,?,?,?,?)"; //db bazei pavadinimai laukeliu bei values ????? kad saugus susijungimas
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $vardas,$pavarde,$email,$slaptazodis,$slaptazodis2); // sssss nurodo kad visi 5 laukeliai yra string tipo. $vardas $pavarde ir tt yra sio kodo kintamieji
$vardas = $_POST['name'];  //gaunam varda
$pavarde = $_POST['surname'];
$email = $_POST['email'];
$slaptazodis = $_POST['password'];
$slaptazodis2 = $_POST['cpassword']; //cia naudojamas  name='cpassword' is html kodo.
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$msg['error']="non valid email";
	echo json_encode($msg);
}else{
	$sql = "SELECT * FROM id WHERE email = '$email'";
	$result = mysqli_query($conn, $sql);
	if(empty($pavarde)){
		$msg['error']='pavarde negali buti tuscias';
		echo json_encode($msg);
	} else
	if(empty($vardas)){
		$msg['error']='vardas negali buti tuscias';
		echo json_encode($msg);
	} else if ($slaptazodis != $slaptazodis2) {
		$msg['error']="password doesnt match";
		echo json_encode($msg);
		} else if (strlen($slaptazodis)>16 || strlen($slaptazodis)<4 ){
				$msg['error']="INCORRECT PASSWORD! make sure it is atleast 4 symbols long and is shorter than 16 symbols.";
				echo json_encode($msg);
				} else if(mysqli_num_rows($result)>0) {
					$msg['error']='this email is allready in use';
					echo json_encode($msg);

					} else {
						mysqli_stmt_execute($stmt);
						$msg['error']="success";
						echo json_encode($msg);
						}
}

//close statement
mysqli_stmt_close($stmt);
//close connection
mysqli_close($conn);

?>