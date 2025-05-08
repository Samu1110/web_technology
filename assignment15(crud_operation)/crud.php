<?php
// ---- DB CONNECTION ----
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// ---- HANDLE INSERT ----
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
}

// ---- HANDLE DELETE ----
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id");
}

// ---- HANDLE UPDATE ----
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
}

// ---- FETCH SINGLE RECORD FOR EDIT ----
$editMode = false;
$editId = $editName = $editEmail = "";

if (isset($_GET['edit'])) {
    $editMode = true;
    $id = $_GET['edit'];
    $res = $conn->query("SELECT * FROM users WHERE id=$id");
    $row = $res->fetch_assoc();
    $editId = $row['id'];
    $editName = $row['name'];
    $editEmail = $row['email'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP CRUD</title>
    <style>
        input { margin: 5px; padding: 5px; }
        table { border-collapse: collapse; margin-top: 20px; }
        td, th { padding: 8px 12px; border: 1px solid #ccc; }
    </style>
</head>
<body>

<h2><?= $editMode ? "Edit User" : "Add New User" ?></h2>
<form method="post">
    <?php if ($editMode): ?>
        <input type="hidden" name="id" value="<?= $editId ?>">
    <?php endif; ?>
    Name: <input type="text" name="name" required value="<?= $editName ?>"><br>
    Email: <input type="email" name="email" required value="<?= $editEmail ?>"><br>
    <input type="submit" name="<?= $editMode ? 'update' : 'add' ?>" value="<?= $editMode ? 'Update' : 'Add' ?>">
</form>

<h2>User List</h2>
<table>
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    <?php
    $res = $conn->query("SELECT * FROM users ORDER BY id DESC");
    while ($row = $res->fetch_assoc()):
    ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
                <a href="?edit=<?= $row['id'] ?>">Edit</a> |
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
