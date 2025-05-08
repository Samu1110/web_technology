<?php
class parent_class {
    public function meth1() {
        echo " parent_class<br>";
    }
}

class child extends parent_class {
    public function meth2() {
        echo "child class";
    }
}

$child = new child();
$child->meth1();      
$child->meth2();  
?>
