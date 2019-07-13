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

class Plan extends Car {
    
}

 $bmw = new Car();
 $truck = new Car();

$jet = new Plan();




$bmw -> MoveWheels();
echo "Bmw Wheels: ". $bmw->wheels . "<br>";
echo "Bmw Doors: ". $bmw->doors= 2 . "<br>";


echo "Daf Wheels: ". $truck->wheels =12 ."<br>"; 
echo "Daf Doors: ". $truck->doors = 2 ."<br>";

 $jet->CreateDoors();
echo "Jet Wheels :" . $jet->wheels=2;


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