<html>
<head>
    <title> Welcom To my Browse </title>
    <link rel = "stylesheet" type = "text/css" href = "style1.css">
    <link rel="stylesheet" href="front.css">
</head>
<body>
<header>
	<nav>
        <div class="wrapper">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <ul class="nav-area">
                <li><a href="interface.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>   
<div id="loginbox"> 
    <form action = "reserve.php" method = "post">
        <img src="images/icon.png" class="icon"> 
            <form>  
                <label>First Name</label>
                    <input type = "text" id = "username" name = "fname" placeholder="Enter Your Name" required="" />
                <label>Last Name</label>    
                    <input type = "text" id = "username" name = "lname" placeholder="Enter Last Name" required="" />
                <label>Phone Number</label>
                    <input type = "text" id = "phone" name = "phone" placeholder="Phone Number" required="" />             
                <label>Details</label>
                <p>
                    <textarea name ="detail" placeholder = "Input Something" rows = "5" required=""> </textarea>
                </p>
                <div class="row">
                <label>Select Time:</label><br>
                    <select name="time" id="time" class="InputBox">
                        <option value="" disabled selected>Time</option>
                        <option>06:30 AM</option>
                        <option>08:30 AM</option>
                        <option>10:30 PM</option>
                        <option>12:30 PM</option>
                        <option>02:30 PM</option>
                        <option>04:30 PM</option>
                        <option>06:30 PM</option>
                        <option>08:30 PM</option>
                        <option>10:30 PM</option>
                    </select>
                </div>
                <div class="row">
                <label>Select Date:</label><br>
                    <select name="date" id="date" class="InputBox">
                        <option value="" disabled selected>Date</option>
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                    </select>
                </div>
            <br><button type="submit" name="submit" >submit</button>
        </form>
    </form>
</div>
</body>
</html>