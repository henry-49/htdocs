<?php 
    include "db.php";
  
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
            <form action="login_create.php" method="post">
                
                <div class="form-group">
                   <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>
                
                <div class="form-group">
                   <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                
                <div class="form-control">
                    <select name="" id="">
                        <option value="">1</option>
                        <option value="">1</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Login"class="btn btn-primary">
            </form>
            
        </div>
        
        
        
        
    </div>
</body>
</html>