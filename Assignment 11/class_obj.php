<?php
class Car {
    public $greet = "hi <br>";

    public function greet() {
        echo "Good afternoon";
    }
}

$myCar = new Car();
echo $myCar->greet; 
$myCar->greet();      
?>
