<?php 

    
     $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
     
     if($connection) {
         echo "We are conncted to the database......";
     }else{
         die("Database Connection failed....");
     }
?>
