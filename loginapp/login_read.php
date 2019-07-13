<?php 
include "db.php";
include "functions.php";

       
        $query = "SELECT * FROM users";
        
       $result = mysqli_query($connection, $query);
        
?>

<?php include "includes/header.php"; ?>
    
    <div class="container">
        
        <div class="col-sm-6">
        
        <pre>
       <?php 
             readRows();
        ?>
        
        </pre>
        </div>
        
    </div>
    
</body>
</html>