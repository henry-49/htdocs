<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    
       $list =[399, 490, 238, 109, 390, 210, 100];
            echo max($list)."<br>";
            echo min($list)."<br>";
             sort($list)."<br>";
            print_r($list)."<br>";
    $string = "gfjsgvslvlsblvblvblvblsb";
            
    $values = ['henrs', 394, 'hejsoyd', 381, 'tehha',$string];
    $found = in_array($string, $values);
    
    if($found){
        echo "Wow we found something ";
    }else{
       echo "We messed up, we could not find something ";
    }
    ?>
</body>
</html>