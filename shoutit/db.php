<?php
// Connect to database

$con = mysqli_connect("localhost", "root", "", "shoutit");

if(isset($con)){
    
    echo "";
}else {
    echo "Database Connection Failed".mysqli_connect_error();
}