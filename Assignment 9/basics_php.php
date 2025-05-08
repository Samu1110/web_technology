<?php
$isMember = true;
$discount = $isMember ? 0.15 : 0.05;
echo "Your discount is " . ($discount * 100) . "%";
?>


<!-- if condition -->
<?php
$age = 18;

if ($age >= 18) {
    echo "You are an adult.";
}
?>

<!-- if-else
 <?php
$score = 75;

if ($score >= 50) {
    echo "You passed the exam!";
} else {
    echo "You failed the exam.";
}
?> -->

<!-- if-else-if
 <?php
$grade = 85;

if ($grade >= 90) {
    echo "Grade: A";
} elseif ($grade >= 80) {
    echo "Grade: B";
} elseif ($grade >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: D or below";
}
?> -->

<!-- switch
 <?php
 $day = "Wednesday";

 switch ($day) {
     case "Monday":
         echo "Start of the work week.";
         break;
     case "Wednesday":
         echo "Midweek day.";
         break;
     case "Friday":
         echo "Weekend is coming!";
         break;
     default:
         echo "Regular day.";
 }
 ?> -->

 <!-- for loop
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}
?> -->

<!-- while
<?php
$count = 1;
while ($count <= 10) {
    echo "Count: $count <br>";
    $count++;
}
?> -->
<!-- do while
 <?php
$num = 1;
do {
    echo "Number: $num <br>";
    $num++;
} while ($num <= 8);
?> -->

<!-- for each
 <?php
 $colors = array("Red", "Green", "Blue", "Yellow");

 foreach ($colors as $color) {
     echo "$color <br>";
 }
 
 ?> -->


<!-- personal details
 <?PHP
 echo "Name: Samruddhi Mithari<br>";
 echo "Rolo no: 44 <br>";
 echo "Primary Schoool:Podar International school<br>";
 echo "Btech : D.Y.Patil college of engg <br>"
 ?> -->

 <!-- factorial
 <?php
$num = 5;  
$factorial = 1;

if ($num < 0) {
    echo "Factorial is not defined for negative numbers.";
} else {
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo "Factorial of $num is: $factorial";
}
?> -->


<!-- largest of 3 numbers
<?php

$a = 15;
$b = 27;
$c = 18;


if ($a >= $b && $a >= $c) {
    $largest = $a;
} elseif ($b >= $a && $b >= $c) {
    $largest = $b;
} else {
    $largest = $c;
}


echo "The largest number among $a, $b, and $c is: $largest";
?> -->

<!-- operations
<?php

$num1 = 11;
$num2 = 5;



$sum = $num1 + $num2;
$sub=$num1 - $num2;
$mul=$num1 * $num2;
$div=$num1 / $num2;
$mod=$num1 % $num2;


echo "The sum of $num1, $num2 is: $sum";
echo "The subtraction of $num1, $num2 is: $sub";
echo "The multiplication of $num1, $num2 is: $mul";
echo "The division of $num1, $num2 is: $div";
echo "The modulo of $num1, $num2 is: $mod";
?> -->