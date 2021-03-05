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
</head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "reservation.css">
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <ul class="nav-area">
                <li><a href="interface.php">Home</a></li>
                <li><a href="Reservation.php">Reservation</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>	
        <h2>Welcome <b><?= htmlspecialchars($_SESSION['fname']), ($_SESSION['lname'])  ?></h2>
        <h2>Time: <b><?= htmlspecialchars($_SESSION['time']) ?></h2>
        <h2>Date: <b><?= htmlspecialchars($_SESSION['date']) ?></h2>
        <h2>Phone Number: <b><?= htmlspecialchars($_SESSION['phone']) ?></h2>
        <h2>Type of Procedure: <b><?= htmlspecialchars($_SESSION['detail']) ?></h2>
        

            
            
</body>
</html>