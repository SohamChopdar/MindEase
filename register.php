<?php
// Include Database Connection
include 'conn.php'; // Ensure conn.php is correct

$error = $success = ""; // Initialize error and success messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize Inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['phone']);
    $dob = trim($_POST['dob']);
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($dob) || empty($password) || empty($repassword)) {
        $error = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
        $error = "Invalid phone number!";
    } elseif ($password !== $repassword) {
        $error = "Passwords do not match!";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Check if email already exists
        $checkEmail = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $checkEmail->execute([$email]);

        if ($checkEmail->rowCount() > 0) {
            $error = "Email already registered!";
        } else {
            // Insert User Data
            $stmt = $pdo->prepare("INSERT INTO users (name, email, phone, dob, password) VALUES (?, ?, ?, ?, ?)");
            
            if ($stmt->execute([$name, $email, $phone, $dob, $hashedPassword])) {
                $success = "Registration successful! You can now <a href='login.php'>login</a>.";
            } else {
                $error = "Something went wrong!";
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <!-- Display Success/Error Messages -->
    <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
    <?php if (!empty($success)) { echo "<p class='success'>$success</p>"; } ?>

    <form action="" method="POST"> 
        <div class="input-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($name ?? '') ?>" required>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>" required>
        </div>

        <div class="input-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone ?? '') ?>" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
        </div>

        <div class="input-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="<?= htmlspecialchars($dob ?? '') ?>" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="input-group">
            <label for="repassword">Re-enter Password</label>
            <input type="password" id="repassword" name="repassword" required>
        </div>

        <button type="submit">Register</button>
    </form>
</div>

</body>
<script>
    document.getElementById('phone').addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
    });
</script>
</html>
