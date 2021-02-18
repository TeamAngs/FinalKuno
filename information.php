<html>
<head>
    <title> Welcom To my Browse </title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
<div id="frm"> 
    <form action = "reserve.php" method = "post">
            
            <label>Username</label>
            <p>
                <input type = "text" id = "username" name = "username" required="" />
            </p>
            <label>phone</label>
            <p>
                <input type = "number" id = "phone" name = "phone" required="" />
            </p>
        
            <label>details</label>
            <p>
                <textarea name = "detail" placeholder = "Input Something" rows = "10" required=""> </textarea>
            </p>

            <div class="row">
            <label>Select Time:</label><br>
            <select name="time" id="time" class="InputBox">
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
        <button type="submit" name="submit" >submit</button>
    </form>
</div>
</body>
</html>