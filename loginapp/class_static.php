<?php
    class Car {
        static $wheels = 4;
        protected $hood = 1;
       
        
        function showProperty(){
            
             Car::$wheels = 16 . "<br>";
        }
        
        
    }


 $bmw = new Car();

Car::showProperty();
echo "Using Static:" . Car::$wheels;
 

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