<?php
session_start();

// Get input
$name = $_POST['name'];
$email = $_POST['email'];

// Store in session
$_SESSION['user_name'] = $name;

// Store in cookie for 1 hour
setcookie('user_email', $email, time() + 3600);

// Redirect to display page
header("Location: display_info.php");
exit();
?>
