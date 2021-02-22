<?php

    $db = mysqli_connect('localhost','root','shimata','reservation');
    
    if (isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $detail = mysqli_real_escape_string($db, $_POST['detail']);
        $time = mysqli_real_escape_string($db, $_POST['time']);
        $date = mysqli_real_escape_string($db, $_POST['date']);

        $query = mysqli_query($db, "INSERT INTO res(fname,lname,phone,detail,time,date) VALUE ('$fname','$lname','$phone','$detail','$time','$date')");
        if($query){
            $_SESSION['success'] = "Your Reservation hab been submitted";
            $_SESSION['id'] = $db->inser_id;
            header('location: reservation.php');
            exit();

            }

        else{
            $_SESSION['error'] = "Invalid Input";
        }
        
    }


?>