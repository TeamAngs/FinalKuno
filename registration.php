<!DOCTYPE html>
<html>
<head>
  <title>Registration!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="registration.css">
</head>
<body>
  <form action="registration_code.php" method="post">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required="">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required="">
      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Password" name="Confirm_password" id="password" required="">
      <label for="psw"><b>Email Address</b></label>
      <input type="Email" placeholder="Example: Google@gmail.com" name="Email" id="username" required="">
      <hr>
      <button type="submit" class="registerbtn">Register</button>
    </div> 
    <div class="container signin">
        <p>Already have an account? <a href="login.php">Login</a>.</p>
    </div>
  </form>
</body>
</html>