<!-- <?php
include 'includes/db.php';
session_start();
if (!isset($_SESSION['user_id'])) exit();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dosage = $_POST['dosage'];
    $frequency = $_POST['frequency'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO medicines (user_id, name, dosage, frequency) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $name, $dosage, $frequency);
    $stmt->execute();
    header("Location: dashboard.php");
    exit();
}
?>
<form method="POST">
    <input type="text" name="name" placeholder="Medicine Name" required>
    <input type="text" name="dosage" placeholder="Dosage">
    <input type="text" name="frequency" placeholder="Frequency">
    <button type="submit">Add</button>
</form> -->



<?php
include 'includes/db.php';
session_start();
if (!isset($_SESSION['user_id'])) exit();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dosage = $_POST['dosage'];
    $frequency = $_POST['frequency'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO medicines (user_id, name, dosage, frequency) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $name, $dosage, $frequency);
    $stmt->execute();
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="header">
        <div class="logo">Medicine Tracker</div>
        <a href="logout.php" class="profile">Logout</a>
    </div>
    <div class="container">
        <h2>Add New Medicine</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Medicine Name" required>
            <input type="text" name="dosage" placeholder="Dosage">
            <input type="text" name="frequency" placeholder="Frequency">
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
