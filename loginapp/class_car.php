<?php
    class Car {
        
        function MoveWheels(){
            
        echo "Wheel is moving";
        
        }
    }

if(class_exists("Car")){
    
    echo "Yes car exisit";
    
}

if(method_exists("Car","MoveWheels")){
    
    echo "method exisit in car";
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