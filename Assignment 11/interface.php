<?php
interface Shape1 {
    public function area();
}

class Square implements Shape1{
    private $side;
    
    public function __construct($side) {
        $this->side = $side;
    }
    
    public function area() {
        return $this->side * $this->side;
    }
}

$square = new Square(5);
echo $square->area(); 
?>