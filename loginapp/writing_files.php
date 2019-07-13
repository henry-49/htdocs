<?php
$file = "opentest.txt";

if($handle = fopen($file, 'w')){
    fwrite($handle , "I love PHP this is really good stuff.. wow");
    
fclose($handle);
    
}else{
    echo "application fail to write to ". $file;
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