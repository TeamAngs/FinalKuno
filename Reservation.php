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
        <h2> Reserved Schedule </h2>
        <table>
            <tr><!-- table row -->
                <th>Time</th>
                <th>Sunday</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wedneday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>   
            <tr>
                <td>06:30AM</td>
                <td></td>
                <td></td>
                <td><b><?= htmlspecialchars($_SESSION['fname']) ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr> 
        <tr>
            <td>08:30AM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> 
        <tr> 
            <td>10:30AM</td>
            <td></td>
            <td>Reserved</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> 
        <tr>
            <td>12:30PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> 
        <tr>
            <td>2:30PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> 
        <tr>
            <td>4:30PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Reserved</td>
            <td></td>
        </tr> 
        <tr>
            <td>6:30PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> 
        <tr>
            <td>8:30PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><b><?= htmlspecialchars($_SESSION['lname']) ?></td>
            <td></td>
            <td></td>
        </tr> 
        <tr>
            <td>10:30PM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
</body>
</html>