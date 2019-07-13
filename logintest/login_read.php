<?php
 
     $connection = mysqli_connect("localhost", "root", "", "logintest");
    
    
    $query = "SELECT * FROM users";
   
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo "Query Failed...".mysqli_error($connection);
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
           <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <pre>
                    <?php
                    print_r($row);
                    ?>
                    </pre>
                     <?php
                }
            ?>
        </div>
    </div>
</body>
</html>