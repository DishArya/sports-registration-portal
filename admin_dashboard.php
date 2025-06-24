<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$query = "SELECT * FROM students";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>

<div class="container">
    <h2>Admin Dashboard - Student Details</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th><th>College</th><th>Age</th><th>Contact</th><th>Email</th>
                <th>Sport</th><th>Category</th><th>Payment Screenshot</th><th>ID Card</th>
                <th>Status</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['college'] ?></td>
                    <td><?= $row['age'] ?></td>
                    <td><?= $row['contact'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['sport'] ?></td>
                    <td><?= $row['category'] ?></td>
                    <td><a href="<?= $row['payment_screenshot'] ?>" target="_blank">View</a></td>
                    <td><a href="<?= $row['id_card'] ?>" target="_blank">View</a></td>
                    <td><?= $row['status'] ?></td>
                    <td>
                        <a class="verify" href="verify_student.php?id=<?= $row['id'] ?>&status=Verified">Verify</a>
                        <a class="reject" href="verify_student.php?id=<?= $row['id'] ?>&status=Rejected">Reject</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>
