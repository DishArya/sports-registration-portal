<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['student'])) {
    header("Location: student_login.php");
    exit();
}

$email = $_SESSION['student'];
$query = "SELECT * FROM students WHERE email='$email'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="student_dashboard.css">
</head>
<body>

<div class="container">
    <h2>Student Dashboard</h2>
    <table>
        <tr><th>Name:</th><td><?= $row['name'] ?></td></tr>
        <tr><th>College:</th><td><?= $row['college'] ?></td></tr>
        <tr><th>Age:</th><td><?= $row['age'] ?></td></tr>
        <tr><th>Contact:</th><td><?= $row['contact'] ?></td></tr>
        <tr><th>Email:</th><td><?= $row['email'] ?></td></tr>
        <tr><th>Sport:</th><td><?= $row['sport'] ?></td></tr>
        <tr><th>Category:</th><td><?= $row['category'] ?></td></tr>
        <tr><th>Payment Screenshot:</th>
            <td><a href="<?= $row['payment_screenshot'] ?>" target="_blank">View</a></td></tr>
        <tr><th>ID Card:</th>
            <td><a href="<?= $row['id_card'] ?>" target="_blank">View</a></td></tr>
        <tr><th>Status:</th><td><?= $row['status'] ?></td></tr>
    </table>

    <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>
