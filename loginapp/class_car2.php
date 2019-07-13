<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 5;
        
        function MoveWheels(){
            
            $this->wheels = 4;
        
        }
        
         function CreateDoors(){
            
             $this->doors = 3;
        
        }
    }

 $bmw = new Car();
 $truck = new Car();


$bmw -> MoveWheels();
echo "Bmw Wheels: ". $bmw->wheels . "<br>";
echo "Bmw Doors: ". $bmw->doors . "<br>";


echo "Daf Wheels: ". $truck->wheels = 12 ."<br>"; 
echo "Daf Doors: ". $truck->doors = 2;


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