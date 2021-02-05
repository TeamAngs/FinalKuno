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

    <form action = "information.php" method = "post">
    <img src="image/icon.png" class="icon">
    
    <h2>Reservation Form</h2>
        <form >
        <br>
        <p>Username</p>
            <input type="text" id="" placeholder="Enter Username">
           
        <br>
        <br>
        <p>Phone Number</p>
            <input type="number" id="" placeholder="+639">
            <a href="registration.php">
        <br>
        </form>
    </form>
  
            <!--<label>Username</label>
            <p>
                <input type = "text" id = "username" name = "username" required="" />
            </p>

            <label>phone</label>
            <p>
                <input type = "number" id = "phone" name = "phone" required="" />
            </p>

            <br>
            Don't have an account?</a>
            <br>
            <a href="#">Forget Password</a>
            -->
            
            <h3>Details</h3>
            <p>
                <textarea name = "detail" placeholder = "Input Something" rows = "10" required=""> </textarea>
            </p>
            <br>
        <button type ="button" name="button1" >submit</button >
    </form>
</div>
</body>
</html>
    