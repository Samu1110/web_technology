<?php
session_start();

$name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Not set';
$email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : 'Not set';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Display Info</title>
</head>
<body>

<h2>Stored Info</h2>

<p><strong>Name (from session):</strong> <?php echo htmlspecialchars($name); ?></p>
<p><strong>Email (from cookie):</strong> <?php echo htmlspecialchars($email); ?></p>

</body>
</html>
