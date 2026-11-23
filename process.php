<?php
session_start();

// Check whether the form was submitted
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

// Receive form data safely
$name = trim($_POST["name"] ?? "");
$usn = trim($_POST["usn"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$department = trim($_POST["department"] ?? "");
$semester = trim($_POST["semester"] ?? "");
$address = trim($_POST["address"] ?? "");

// Server-side validation
$errors = [];

if (!preg_match("/^[A-Za-z ]{2,50}$/", $name)) {
    $errors[] = "Invalid name.";
}

if (!preg_match("/^[A-Za-z0-9]{5,20}$/", $usn)) {
    $errors[] = "Invalid USN.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

if (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Phone number must contain 10 digits.";
}

$validDepartments = ["CSE", "ISE", "ECE", "AIML"];
if (!in_array($department, $validDepartments, true)) {
    $errors[] = "Invalid department.";
}

if (!in_array($semester, ["1","2","3","4","5","6","7","8"], true)) {
    $errors[] = "Invalid semester.";
}

if (strlen($address) < 5) {
    $errors[] = "Please enter a valid address.";
}

// Display validation errors
if (!empty($errors)) {
    echo "<h2>Registration Failed</h2>";
    foreach ($errors as $error) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }
    echo '<a href="index.php">Go Back</a>';
    exit();
}

// Store data in session
$_SESSION["student"] = [
    "name" => $name,
    "usn" => $usn,
    "email" => $email,
    "phone" => $phone,
    "department" => $department,
    "semester" => $semester,
    "address" => $address
];

// Redirect to confirmation page
header("Location: success.php");
exit();
?>