<!--
Here, we write code for login.
-->
<?php
	require_once('connection.php');
	$Email = $password = $pwd = '';

	$Email = $_POST['Email'];
	$pwd = $_POST['password'];
	$password = md5($pwd);
	$sql = "SELECT * from register1 where Email='$Email' and password='$password'";
	$result = mysqli_query($conn, $sql);
	
		if(mysqli_num_rows($result) > 0){
	
			while($row = mysqli_fetch_assoc($result)){
		
				$id = $row["id"];
				$username = $row["Email"];
				session_start();
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
			}
			header("Location: interface.php");
		}
		else{
	
			echo "Invalid username or password";
		}
?>