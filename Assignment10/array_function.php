<?php

$fruits = array("Apple", "Banana", "Orange", "Mango");


echo "Number of fruits: " . count($fruits) . "<br>";


echo is_array($fruits) ? "It's an array" : "Not an array";
echo "<br>";


echo in_array("Banana", $fruits) ? "Banana found" : "Banana not found";
echo "<br>";


$key = array_search("Orange", $fruits);
echo "Orange is at index: $key<br>";


$reversed = array_reverse($fruits);
print_r($reversed);
echo"<br>";

$colors = ["Red", "Green", "Blue"];

array_push($colors, "Yellow", "Purple");
print_r($colors);


$last = array_pop($colors);
echo "<br>Removed: $last<br>";


array_splice($colors, 1, 1, ["Pink", "Cyan"]);
print_r($colors);
echo"<br>";

$numbers = [4, 2, 8, 6, 1];


sort($numbers);
print_r($numbers);
echo"<br>";


rsort($numbers);
print_r($numbers);
echo"<br>";


$ages = ["John" => 25, "Mary" => 30, "Bob" => 20];
asort($ages);
print_r($ages);
echo"<br>";



$array1 = ["a", "b", "c"];
$array2 = ["d", "e", "f"];


$merged = array_merge($array1, $array2);
print_r($merged);
?>
