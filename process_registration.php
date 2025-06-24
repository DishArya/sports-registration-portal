<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $college = $_POST["college"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $sport = $_POST["sport"];
    $category = $_POST["category"];
    $payment_screenshot = "uploads/" . $_FILES["payment"]["name"];
    $id_card = "uploads/" . $_FILES["id_card"]["name"];

    // Check if email already exists
    $check_email_query = "SELECT * FROM students WHERE email = '$email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        echo '
        <html>
        <head>
            <link rel="stylesheet" type="text/css" href="process_registration.css">
        </head>
        <body>
            <div class="container">
                <h2 class="error">Email Already Registered!</h2>
                <p>Please use a different email to register.</p>
                <a href="student_register.php" class="button">Try Again</a>
            </div>
        </body>
        </html>';
    } else {
        move_uploaded_file($_FILES["payment"]["tmp_name"], $payment_screenshot);
        move_uploaded_file($_FILES["id_card"]["tmp_name"], $id_card);

        $query = "INSERT INTO students (name, college, age, contact, email, sport, category, payment_screenshot, id_card) 
                  VALUES ('$name', '$college', '$age', '$contact', '$email', '$sport', '$category', '$payment_screenshot', '$id_card')";

        if ($conn->query($query)) {
            echo '
            <html>
            <head>
                <link rel="stylesheet" type="text/css" href="process_registration.css">
            </head>
            <body>
                <div class="container">
                    <h2 class="success">Registration Successful!</h2>
                    <p>Thank you for registering.</p>
                    <a href="index.php" class="button">Go Back to Home</a>
                </div>
            </body>
            </html>';
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
