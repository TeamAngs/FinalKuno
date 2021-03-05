<!--
Here, we write code for login.
-->
<?php
	session_start();

	// Check if the user is logged in, if not then redirect him to login page
	if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
		header('location: new.php');
		exit;
	}

	if(isset($_POST['submit'])){
		$conn = mysqli_connect("localhost","root","shimata","reservation");

		$time = $date = '';

		$time = $_POST['time'];
		$date = $_POST['date'];
		$sql = "SELECT * from res where time='$time' and date='$date'";
		$result = mysqli_query($conn, $sql);
		
			if(mysqli_num_rows($result) > 0){

				$_SESSION['loggedIn'] = true;
				$_SESSION['id'] = $id;
				$_SESSION['fname'] = $fname;
				$_SESSION['lname'] = $lname;
				$_SESSION['time'] = $time;
				$_SESSION['date'] = $date;
				header('location: new.php');
				exit();
			}
			else{
		
				echo "already Reserved";
			}
	}
?>