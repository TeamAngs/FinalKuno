    <html>
    <head>
        <title> Welcom To my Browse </title>
        <link rel = "stylesheet" type = "text/css" href = "style1.css">
    </head>

    <style>
            
            body
            {
                background-image: url("image/newlogin.jpg");
            }
            
    </style>
    <body>
    <div id="reserve"> 
        <form>
        <form action = "information.php" method = "post">
        <img src="image/icon.png" class="icon">
        
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

                <div class="row">
                <label>Reserve:</label><br>
                    <select name="reserve" id="reserve" class="InputBox">
                        <option value="" disabled selected>Reserve</option>
                        <option>RESERVE</option>
                    </select>

                </div>
            <button type ="button" name="button1" >submit</button >
        </form>
    </div>
    </body>
    </html>
        