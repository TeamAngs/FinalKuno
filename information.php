
<!DOCTYPE html>
<html>
<title>Reserve</title>
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
  background-image: url("images/2.jpg");
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

.reset {
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
      </select>
            
    <br>
    <br>
    <br>  
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