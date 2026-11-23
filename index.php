<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>

<div class="container">
    <h1>Student Registration Form</h1>
    <p>Please fill in your details below</p>

    <form action="process.php" method="POST" id="registrationForm">

        <label>Full Name</label>
        <input type="text" name="name" id="name" required>

        <label>USN</label>
        <input type="text" name="usn" id="usn" required>

        <label>Email Address</label>
        <input type="email" name="email" id="email" required>

        <label>Phone Number</label>
        <input type="tel" name="phone" id="phone" required>

        <label>Department</label>
        <select name="department" id="department" required>
            <option value="">Select Department</option>
            <option value="CSE">Computer Science</option>
            <option value="ISE">Information Science</option>
            <option value="ECE">Electronics</option>
            <option value="AIML">AI & Machine Learning</option>
        </select>

        <label>Semester</label>
        <select name="semester" id="semester" required>
            <option value="">Select Semester</option>
            <option value="1">1st Semester</option>
            <option value="2">2nd Semester</option>
            <option value="3">3rd Semester</option>
            <option value="4">4th Semester</option>
            <option value="5">5th Semester</option>
            <option value="6">6th Semester</option>
            <option value="7">7th Semester</option>
            <option value="8">8th Semester</option>
        </select>

        <label>Address</label>
        <textarea name="address" id="address" required></textarea>

        <button type="submit">Submit Registration</button>

    </form>
</div>

</body>
</html>