<?php
 
     $connection = mysqli_connect("localhost", "root", "", "logintest");
    

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO users (username, password)";
    $query .= "VALUES ('$username', '$password' )";
   
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo "Query Failed...".mysqli_error($connection);
    }else{
        echo "Row Inserted.....";
    }
    
    
    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name ="username" class="form-control">
            </div>
              <div class="form-group">
               <label for="password">Password</label>
                <input type="password" name ="password" class="form-control">
            </div>
            <div class="form-group">
             <input type="submit" name ="submit" class="btn btn-info" value="Create">
            </div>
            </form>
        </div>
    </div>
</body>
</html>