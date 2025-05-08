<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input using $_POST
    $name = $_POST['username'];
    $age = $_POST['age'];

    echo "<h2>Received Data:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age);
} else {
    echo "Please submit the form.";
}
?>
