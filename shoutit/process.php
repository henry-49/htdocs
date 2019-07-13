<?php

include 'db.php';

// check if form submited

if(isset($_POST['submit'])){
    
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    
    //Set  Timezone
    date_default_timezone_set('America/New_York');
    $time = date('h:i:s a', time());
    
    //validate input
    
    if(!isset($user) || $user=='' || !isset($message) || $message==''){
        
        $error = "Please Fill in Your Name and a Message";
        header("Location: index.php?error= ".urldecode($error));
        exit();
        
    }else{
        
       $query = "INSERT INTO shouts(user, message, time)
                VALUE('$user', '$message', '$time')";
        
        if(!mysqli_query($con, $query)){
            die('Error '.mysqli_error($con));
        }else{
            header("Location: index.php");
            exit();
        }
    }
}

