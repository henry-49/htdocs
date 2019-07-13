<?php include "db.php"; ?>
<?php

// createRows function

function createRows(){
     global $connection;
     if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
         //Prevents Sql Injection 
        $username = mysqli_real_escape_string($connection, $username);
        $password =  mysqli_real_escape_string($connection, $password);
         
           // Password crypting
         $hashFormat = "$2y$10$"; // run the hash for 10x
             
             // creating salt
         $salt = "iusesomecrazystrings22";
         
         // concatinating hashFormat and salt
         $hashF_and_salt = $hashFormat . $salt;
         
         $password = crypt($password, $hashF_and_salt);
         
        $query = "INSERT INTO users (username, password)";
        $query .="VALUES('$username','$password')";
    
       $result = mysqli_query($connection, $query);
        
        if($result){
            echo "Row inserted.....";
        }else{
            die("query faild....". mysqli_error($connection));
        }
     }
}

// readRows function
function readRows(){
    global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
            
                while($row = mysqli_fetch_assoc($result)){
                    print_r($row); 
        }
    }  
            
// showAllData function
function showAllData(){
    global $connection;
    
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){

            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
}

// UpdateTable function
function  UpdateTable(){
    global $connection;
        if(isset($_POST['submit'])){
         $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username',";
        $query .= "password = '$password'";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed.... " .mysqli_error($connection));
        }
    }
}


// Delete function
function  deleteRows(){
    global $connection;
        if(isset($_POST['submit'])){
         $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed.... " .mysqli_error($connection));
        }
    }
}

?>


