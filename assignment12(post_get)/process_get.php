<?php
// Check if form data exists
if (isset($_GET['username']) && isset($_GET['age'])) {
    $name = $_GET['username'];
    $age = $_GET['age'];

    echo "<h2>Received via GET:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age);
} else {
    echo "Please fill out the form.";
}
?>
