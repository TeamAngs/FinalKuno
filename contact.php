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
    margin: 10px;
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

.transbox h3 {
    color: white;
	text-decoration: underline;
	background: black;
}
.transbox {
	border: solid gray 1pc;
    height: 50%;
    width: 25%;
    border-radius: 5px;
    margin: 100px auto;
    background: black;
    padding: 50px
  }
  
  img {
  border-radius: 4px;
  padding: 5px;
  width: 400px;
  height: 300px;
}

.block{
    float: left;
    width: 33.3%;
    border: 1px solid #ccc;
    padding:10px;
    box-sizing: border-box;
    padding: 15px;
    box-sizing: border-box;
}
</style>
</head>
<body>
    <div class="logo">
        <img src="images/logo.png" class="logo">
    </div>
    <ul class="nav-area">
        <li><a href="interface.php">Home</a></li>
        <li><a href="Reservation.php">Schedule</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="help.php">Help</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>
        <br> <br> <br> <br> <br> <br> 
        <div class="block">
            <img src="images/nino.jpg">
        </div>

        <div class="block">
            <img src="images/said.jpg">
        </div>

        <div class="block">
            <img src="images/april.jpg">
        </div>            
</body>
</html>