<?php
    class Car {
        public $wheels = 4;
        protected $hood = 1;
        private $engine = 1;
        
        var $doors = 5;
        
        function showProperty(){
            
             echo $this->wheels = 16 . "<br>";
        }
        
        
    }

class Toyota extends Car{
    
     function showProperty(){
            
             echo "Toyota Wheel: ". $this->wheels = 5  . "<br>";
           echo "Toyota Hood: ". $this->hood =9;
        }
}

 $bmw = new Car();
 $truck = new Car();
 $toyota  = new Toyota();


$bmw->showProperty();

echo $toyota->showProperty();

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