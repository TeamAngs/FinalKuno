<?php

    $db = mysqli_connect('localhost','root','shimata','reservation');
    
    if (isset($_POST['submit'])){
        $time = mysqli_real_escape_string($db, $_POST['time']);
        $date = mysqli_real_escape_string($db, $_POST['date']);
    }
        
        $query = mysqli_query($db, "SELECT * from res where time='$time' and date='$date'");
        
        if(mysqli_num_rows($result) > 0){
            if($query){
                
                $_SESSION['loggedIn'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                header('location: new.php');
                exit();
                }
            }

        else{
            $_SESSION['error'] = "Invalid Input";
        }
        

?>