<!--
Here, we write code for registration.
-->
<?php
	require_once('connection.php');
	$YS = $id = $Email = $username = $password = $pwd = '';

	$YS = $_POST['YS'];
	$id = $_POST['id'];
	$Email = $_POST['Email'];
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);

	$sql = "INSERT INTO register1 (username,password,YS,id,Email) VALUES ('$username','$password','$YS','$id','$Email')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("Location: homealone.php");
	}

	else	{
	echo "Error :".$sql;
	}
?>