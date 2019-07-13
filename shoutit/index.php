<?php include 'db.php'; ?>
<?php include 'process.php'?>

<?php 
    $query = "SELECT * FROM shouts ORDER BY id DESC";
    $shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
    <div id="container">  
    
        <header>
            <h1>SHOUT IT! Shoutbox</h1>
        </header>
    
        <div id="shouts">
            
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)): ?>
                    <li class="shout"> <span> <?php echo $row['time']; ?></span>&nbsp;<strong><?php echo $row['user']; ?>:</strong> <?php echo $row['message']; ?></li>
                 <?php endwhile;?>
            </ul>
            
        </div>
        
        <div id="input">
           <?php if(isset($_GET['error'])) : ?>
               <div class="error"><?php echo $_GET['error'];?></div>
           <?php endif; ?>
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter Your Name"/>
                <input type="text" name="message" placeholder="Enter A Message"/>
                 <br>
                <input class="btn-shout" type="submit" name="submit" value="Shout it out">
            </form>
        </div>
    </div>
</body>
</html>