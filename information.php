<?php

    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
        header('location: reserve.php');
        exit;
    }

?>
<!DOCTYPE html>
<html>
<title>Information</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="information.css">
</head>
</head>
<body>
<form action="reserve.php" method = "post">
  <div class="container">
    <h1>Welcome!</h1>
    <p>Please fill in this form for reservation.</p>
    <hr>
    <label for="username"><b>FirstName</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" id="username" required="">
    <label for="username"><b>LastName</b></label>
    <input type="text" placeholder="Enter First Name" name="lname" id="username" required="">
    <label for="phonum"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" id="phonum" required="">
    <label for="yrsec"><b>Type of Procedure</b></label>
    <input type="text" placeholder=" Enter Type of Procedure you want" name="detail" id="YS">
    <label for="selecttime"><b>Select Time</b></label><br>
      <select name = "time">
        <option value="" disabled selected>Time</option>
        <option>7:30 AM</option>
        <option>10:30 AM</option>
        <option>12:30 PM</option>
        <option>1:30 PM</option>
        <option>3:30 PM</option>
        <option>5:30 PM</option>
        <option>8:30 PM</option>
        <option>9:30 PM</option>
        <option>10:30 PM</option>
      </select><br><br><br>  
    <label for="date"><b>Select Date</b></label><br>
      <select name = "date">
        <option type="" placeholder="" value="" disabled selected>Date</option>
        <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>Saturday</option>
      </select>
    <hr>
    <button type="submit" class="registerbtn" name = "submit"> Reserve  </button>
    <button type="reset" class="reset" > Reset  </button>
  </div> 
</form>
</body>
</html>