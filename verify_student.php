<?php
include 'db_connect.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    $query = "UPDATE students SET status='$status' WHERE id=$id";
    $conn->query($query);
}

header("Location: admin_dashboard.php");
?>
