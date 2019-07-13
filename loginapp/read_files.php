<?php
$file = "opentest.txt";

if($handle = fopen($file, 'r')){
   $content = fread($handle , filesize($file)); // Each bite equals a character 
    
    
    echo $content;
    
fclose($handle);
    
}else{
    echo "unable to read file". $file;
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