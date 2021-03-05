<?php

    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
        header('location: reserve.php');
        exit;
    }

?>
<html>
<head>
    <title> Welcom To my Browse </title>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "front.css">
<style>
h2{
    text-align: center;
	text-decoration: underline;
	text-shadow:
		-1px -1px 0 white,
		 1px -1px 0 white,
		 -1px 1px 0 white,
		  1px 1px 0 white;
	color:#4056A1;
	text-transform: uppercase;
	font-size: 25px;
	font-family: broadway;

}

h1{
    text-align: center;
	text-decoration: underline;
	text-shadow:
		-1px -1px 0 white,
		 1px -1px 0 white,
		 -1px 1px 0 white,
		  1px 1px 0 white;
	color:#4056A1;
	text-transform: uppercase;
	font-size: 32px;
	font-family: broadway;

}

.transbox h3 {
    color: grey;
	background: white;
    
}
.transbox {
	border: solid gray 1pc;
    height: 50%;
    width: 25%;
    border-radius: 5px;
    margin: 100px auto;
    background: white;
    padding: 50px;
    
  } 

  .transbox {
	margin: 20px;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
	background-color: white;
	border: 5px solid grey;
  } 
</style>
</head>
<body>
  <div class="logo">
    <img src="images/logo.png">
  </div>
    <ul class="nav-area">
      <li><a href="interface.php">Home</a></li>
      <li><a href="Reservation.php">Schedule</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php">Help</a></li>
      <li><a href="contact.php">Contacts</a></li>
      <li><a href="login.php">Logout</a></li>
    </ul><br><br><br><br><br>  
    <h1>You are Reserved Now!!</h1>  
        <div class="transbox">
          <h2>Information</h2><br><br>
          <h3>Name: <b><?= htmlspecialchars($_SESSION['fname']), ($_SESSION['lname'])  ?></h3><br>
          <h3>Time: <b><?= htmlspecialchars($_SESSION['time']) ?></h3><br>
          <h3>Date: <b><?= htmlspecialchars($_SESSION['date']) ?></h3><br>
          <h3>Phone Number: <b><?= htmlspecialchars($_SESSION['phone']) ?></h3><br>
          <h3>Type of Procedure: <b><?= htmlspecialchars($_SESSION['detail']) ?></h3><br>
        </div>             
</body>
</html>