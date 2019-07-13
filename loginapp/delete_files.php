<?php

//$file = "opentest.txt";

$delete_file = unlink("delete_test.php");
if($delete_file){ 
    
    
    echo "File Deleted...";
    
}else{
    echo "unable to delete file". $delete_file;
}

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>