<?php
// This file handles user login functionality.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you would typically check the credentials against a database
    // For demonstration purposes, we'll use a hardcoded username and password
    $valid_username = "user";
    $valid_password = "password";

    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable and redirect to profile page
        $_SESSION['username'] = $username;
        header("Location: ../frontend/pages/profile.html");
        exit();
    } else {
        // Invalid credentials
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Page</h1>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="chat.html">Chat</a></li>
            <li><a href="chat-list.html">Chat List</a></li>
            <li><a href="profile.html">Profile</a></li>
        </ul>
    </nav>
</body>
</html>