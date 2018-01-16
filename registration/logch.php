<?php
$msg = array();
	require "settings.php";
	
	$sql = "SELECT name, password FROM `id` WHERE name = ? and password = ?";
	$sql2 = "SELECT password FROM id WHERE password = ?";
	//$sql = "SELECT name FROM id WHERE name = '$vardas'";
	//prepare statement
	$stmt = mysqli_prepare($conn, $sql);
	$stmt2 = mysqli_prepare($conn, $sql2);
	 if($stmt == false || $stmt2 == false) {
        die("<pre>".mysqli_error($conn).PHP_EOL.$sql."</pre>");
    }  
    $vardas = $_POST['name'];
	$slaptazodis = $_POST['password'];
    //bind parameters
	mysqli_stmt_bind_param($stmt, "ss", $vardas, $slaptazodis);
	//execute the statement
	mysqli_stmt_execute($stmt);
	//bind the result set
	mysqli_stmt_bind_result($stmt, $result, $result2);
	//fetch the result set
	mysqli_stmt_fetch($stmt);
	//close the statement
	mysqli_stmt_close($stmt);
    //post name
	
	if (empty($vardas)) {
		$msg['error'] = "emptyname";
		echo json_encode($msg);
	} else if (empty($slaptazodis)){
		$msg['error'] = 'emptypw';
		echo json_encode($msg);
	} else{
	

if ($result && $result2) {
	$msg['error']="toks slaptazodis yra";
		echo json_encode($msg);
 } else {
 	$msg['error'] = "incorrect";
 	echo json_encode($msg);
 }
}	
	
 ?>