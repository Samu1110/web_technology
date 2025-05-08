<?php
class User {
    public function __construct() {
        echo "Constructor called<br>";
    }

    public function __destruct() {
        echo "Destructor called";
    }
}
$user = new User();
?>

