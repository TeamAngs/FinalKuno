<html>
<head>
    <title> Dental.io </title>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "style1.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>
<marquee behavior="scroll" direction="left"><img src="//www.html.am/images/html-codes/marquees/fish-swimming.gif" width="94" height="88" alt="Swimming fish" /></marquee>
    <div id="loginbox"> 
        <form action = "login_code.php" method = "post">
            <img src="images/icon.png" class="icon">
            <h1>Welcome!</h1>
            <div class="form-group <?= (!empty($errorMessage) || !empty($usernameErr)) ? 'has-error' : ''; ?>" >
                <label>Email Address</label>
                <input type="text" name="Email" placeholder="Example: Example@gmail.com"  required="">
                <span class = "help-block"></span>
            </div>

            <div class="form-group">
                <label>Password</label> 
                <input type="password" name="password" placeholder="Enter Password" required="">
                <span class = "help-block"></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="Login" value="Login">
            </div>
            <a href="registration.php">Don't have an account?</a><br>
            <a href="#">Forget Password</a>
        </form>
    </div>
</body>
</html>
<!-- ss -->