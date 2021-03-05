<html>
<head>
</style>
    <title> Dental.io </title>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "style1.css">
</style>
</head>
<body>
    <div id="loginbox"> 
        <form action = "login_code.php" method = "post">
            <img src="images/icon.png" class="icon">
            <h1>Welcome!</h1>
            <div class="form-group <?= (!empty($errorMessage) || !empty($usernameErr)) ? 'has-error' : ''; ?>" >
                <label><p>Email Address</p></label>
                <input type="text" name="Email" placeholder="Example: Example@gmail.com"  required="">
                <span class = "help-block"></span>
            </div>

            <div class="form-group">
                <label><p>Password</p></label> 
                <input type="password" name="password" placeholder="Enter Password" required="">
                <span class = "help-block"></span>
            </div>

            <div class="form-group">
                <input type="submit" name="Login" value="Login">
            </div>
            <a href="registration.php">Don't have an account?</a><br>
            <a href="#">Forget Password</a>
        </form>
    </div>
</body>
</html>