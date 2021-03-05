<?php
	require_once('connection.php');
	$Email = $username = $password = $pwd = '';

	$Email = $_POST['Email'];
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);

	$sql = "INSERT INTO register1 (username,password,Email) VALUES ('$username','$password','$Email')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("Location: login.php");
	}

	else{
	echo "Error :".$sql;
	}
?>