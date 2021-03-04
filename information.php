<!-- 
<html>
<head>
    <title> Welcom To my Browse </title>
    <link rel = "stylesheet" type = "text/css" href = "style1.css">
</head>
<body>
<div id="loginbox"> 
    <form action = "login_code.php" method = "post">
        <img src="images/icon.png" class="icon"> 
            <form>  
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

                <div class="row">
                <label>Reserve:</label><br>
                    <select name="reserve" id="reserve" class="InputBox">
                        <option value="" disabled selected>Reserve</option>
                        <option>RESERVE</option>
                    </select>
                </div>

            <button type="submit" name="submit" >submit</button>
        </form>
    </form>
</div>
</body>
</html>
     -->
<!DOCTYPE html>
<html>
<title>Information</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin-top: 20px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 46px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Welcome!</h1>
    <p>Please fill in this form for reservation.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="phonum"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="password" id="phonum" required>

    <label for="yrsec"><b>Type of Procedure</b></label>
    <input type="text" placeholder=" Enter Type of Procedure you want" name="procedure" id="YS" required>

  
    <label for="selecttime"><b>Select Time</b></label><br>
      <select >
        <option type="" placeholder="" value="" disabled selected>Time</option>
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
            
    <br>
    <br>
    <br>  

    <label for="date"><b>Select Date</b></label><br>
      <select >
      <option type="" placeholder="" value="" disabled selected>Date</option>
      <option>Monday</option>
      <option>Tuesday</option>
      <option>Wednesday</option>
      <option>Thursday</option>
      <option>Friday</option>
      <option>Saturday</option>
      </select>

    <hr>
    <button type="submit" class="registerbtn"> <a href="reserve.php"></a> Reserve  </button>
  </div>
  
</form>

</body>

</html>


