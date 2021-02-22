<!--
Here, we write code for login.
-->
<?php
if(isset($_POST['submit'])){
	$conn = mysqli_connect("localhost","root","shimata","reservation");

	$time = $date = '';

	$time = $_POST['time'];
	$date = $_POST['date'];
	$sql = "SELECT * from res where time='$time' and date='$date'";
	$result = mysqli_query($conn, $sql);
	
		if(mysqli_num_rows($result) > 0){

			echo "Already Taken";
		}
		else{
	
			echo "Reserved";
		}
	}
?>