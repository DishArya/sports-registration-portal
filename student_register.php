<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="student_register.css">
</head>
<body>

<div class="registration-container">
    <div class="left-section">
        <div class="image-section">
            <h3>Entry Fee Details</h3>
            <img src="image.png" alt="Entry Fee">
        </div>

        <div class="qr-section">
            <h3>Scan to Pay</h3>
            <img src="payment_qr.jpg" alt="Payment QR Code">
        </div>
    </div>

    <div class="form-section">
        <h2>Student Registration</h2>
        <form action="process_registration.php" method="POST" enctype="multipart/form-data">
            <label>Full Name:</label>
            <input type="text" name="name" placeholder="Enter your full name" required>

            <label>College Name:</label>
            <input type="text" name="college" placeholder="Enter your college name" required>

            <label>Age:</label>
            <input type="number" name="age" placeholder="Enter your age" required>

            <label>Contact Number:</label>
            <input type="text" name="contact" placeholder="Enter your contact number" required>

            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label>Select Sport:</label>
            <select name="sport" required>
                <option value="Table Tennis">Table Tennis</option>
                <option value="Badminton">Badminton</option>
                <option value="Chess">Chess</option>
                <option value="100m Race">100m Race</option>
                <option value="500m Race">500m Race</option>
                <option value="200m Race">200m Race</option>
                <option value="Long Jump">Long Jump</option>
                <option value="Javelin Throw">Javelin Throw</option>
                <option value="Arm Wrestling">Arm Wrestling</option>
                <option value="Shot Put">Shot Put</option>
            </select>

            <label>Category:</label>
            <select name="category" required>
                <option value="Boy">Boy</option>
                <option value="Girl">Girl</option>
            </select>

            <label>Upload Payment Screenshot:</label>
            <input type="file" name="payment" required>

            <label>Upload College ID Card:</label>
            <input type="file" name="id_card" required>

            <button type="submit">Register</button>
        </form>
    </div>
</div>

</body>
</html>
