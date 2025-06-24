<?php
session_start();
include 'db_connect.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $query = "SELECT * FROM students WHERE email='$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['student'] = $email;
        header("Location: student_dashboard.php");
        exit();
    } else {
        $error = "Student not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="student_login.css">
</head>
<body>

<div class="login-container">
    <h2>Student Login</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Enter Email" required>
        <button type="submit">Login</button>
    </form>
    <?php if (!empty($error)) { echo "<p class='error-message'>$error</p>"; } ?>
</div>

</body>
</html>
