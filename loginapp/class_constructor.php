<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        
        var $doors = 5;
        
        function __construct(){
            
             echo $this->wheels = 12;
        }
        
         
         function MoveWheels(){
            
            $this->wheels = 4;
        
        }
    }


 $bmw = new Car();
 $truck = new Car();

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