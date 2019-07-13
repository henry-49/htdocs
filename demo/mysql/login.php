<?php 

 if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $password = $_POST['password'];
     
     $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
     
     if($connection) {
         echo "We are conncted to the database......";
     }else{
         die("Database Connection failed....");
     }
     
     
    /* if($username !== " " && $password !== ""){
         
         echo"Welcome " .$username . " " . $password;
     }else{
         
         echo " Username is invaild";
   
     }*/
     
     
   //  mysql_query();
     
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <div class="col-sm-6">
            <form action="login.php" method="post">
                
                <div class="form-group">
                   <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>
                
                <div class="form-group">
                   <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                
                <input type="submit" name="submit" value="Login"class="btn btn-primary">
            </form>
            
        </div>
        
        
        
        
        
    </div>
</body>
</html>