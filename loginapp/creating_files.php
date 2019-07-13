<?php
$file = "opentest.txt";

$handle = fopen($file, 'w');

if($handle){
    echo "File create successful...";
    
}else{
    echo "File creation fail..";
}

fclose($handle);
 

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