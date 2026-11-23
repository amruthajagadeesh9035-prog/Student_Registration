<?php
session_start();

if (!isset($_SESSION["student"])) {
    header("Location: index.php");
    exit();
}

$student = $_SESSION["student"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Registration Successful!</h1>

    <p>Your application has been submitted successfully.</p>

    <h2>Student Details</h2>

    <p><strong>Name:</strong>
    <?= htmlspecialchars($student["name"]) ?></p>

    <p><strong>USN:</strong>
    <?= htmlspecialchars($student["usn"]) ?></p>

    <p><strong>Email:</strong>
    <?= htmlspecialchars($student["email"]) ?></p>

    <p><strong>Phone:</strong>
    <?= htmlspecialchars($student["phone"]) ?></p>

    <p><strong>Department:</strong>
    <?= htmlspecialchars($student["department"]) ?></p>

    <p><strong>Semester:</strong>
    <?= htmlspecialchars($student["semester"]) ?></p>

    <p><strong>Address:</strong>
    <?= htmlspecialchars($student["address"]) ?></p>

    <a href="index.php">
        <button type="button">Back to Registration</button>
    </a>

</div>

</body>
</html>