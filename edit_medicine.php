<!-- <?php
include 'includes/db.php';
session_start();
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dosage = $_POST['dosage'];
    $frequency = $_POST['frequency'];
    $conn->query("UPDATE medicines SET name='$name', dosage='$dosage', frequency='$frequency' WHERE id=$id");
    header("Location: dashboard.php");
    exit();
}
?>
<form method="POST">
    <input type="text" name="name" placeholder="New Name" required>
    <input type="text" name="dosage" placeholder="New Dosage">
    <input type="text" name="frequency" placeholder="New Frequency">
    <button type="submit">Update</button>
</form> -->



<?php
include 'includes/db.php';
session_start();
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dosage = $_POST['dosage'];
    $frequency = $_POST['frequency'];
    $conn->query("UPDATE medicines SET name='$name', dosage='$dosage', frequency='$frequency' WHERE id=$id");
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Medicine</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="header">
        <div class="logo">Medicine Tracker</div>
        <a href="logout.php" class="profile">Logout</a>
    </div>
    <div class="container">
        <h2>Edit Medicine</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="New Name" required>
            <input type="text" name="dosage" placeholder="New Dosage">
            <input type="text" name="frequency" placeholder="New Frequency">
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
