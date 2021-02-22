<?php
	require_once('connection.php');
	$YS = $id_number = $Email = $username = $password = $pwd = '';

	$YS = $_POST['YS'];
	$id_number = $_POST['id_number'];
	$Email = $_POST['Email'];
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);

	$sql = "INSERT INTO register1 (username,password,YS,id_number,Email) VALUES ('$username','$password','$YS','$id_number','$Email')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("Location: interface.php");
	}

	else	{
	echo "Error :".$sql;
	}
?>