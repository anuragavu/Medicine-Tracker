<!-- <?php
include 'includes/db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM medicines WHERE user_id = $user_id");
?>
<a href="logout.php">Logout</a>
<h2>Your Medicines</h2>
<a href="add_medicine.php">Add Medicine</a>
<ul>
<?php while ($row = $result->fetch_assoc()): ?>
    <li><?php echo $row['name']; ?> - <?php echo $row['dosage']; ?> - <?php echo $row['frequency']; ?>
        <a href="edit_medicine.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete_medicine.php?id=<?php echo $row['id']; ?>">Delete</a>
    </li>
<?php endwhile; ?>
</ul> -->



<?php
include 'includes/db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM medicines WHERE user_id = $user_id");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="header">
        <div class="logo">Medicine Tracker</div>
        <a href="logout.php" class="profile">Logout</a>
    </div>
    <div class="container">
        <h2>Your Medicines</h2>
        <a href="add_medicine.php" class="edit">+ Add Medicine</a>
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <?= htmlspecialchars($row['name']) ?> - <?= $row['dosage'] ?> - <?= $row['frequency'] ?>
                    <div>
                        <a href="edit_medicine.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
                        <a href="delete_medicine.php?id=<?= $row['id'] ?>" class="delete">Delete</a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>
