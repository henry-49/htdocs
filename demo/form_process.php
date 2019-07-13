<?php 
//$username = $_POST['username'];
//$password = $_POST['password'];
    
    if(isset($_POST['submit'])){
        $min = 5;
        $max = 10;
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        $name = array("Tom", "Maria", "James", "Jane", "Aneta", "Henry");
        
        if(strlen($username) < $min){
            echo "Usernamehas to be longer than Five". "<br>";
        }
        
        if(strlen($username) > $max){
            echo "Username cannot be longer than Ten";
        }
        
        
         if(in_array($username, $name)){
            
            echo"Welcome: ".$username;
        
        //echo "The Username is : ". $username;
    }else{
        
        echo "Sorry you are not Allowed";
    }


    }

   


?> 