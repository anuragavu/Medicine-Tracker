<?php
include 'includes/db.php';
session_start();
$id = $_GET['id'];
$conn->query("DELETE FROM medicines WHERE id=$id");
header("Location: dashboard.php");
?>
