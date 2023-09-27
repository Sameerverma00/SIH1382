<?php
session_start();

// Check if the user is logged in (session variable is set)
if (!isset($_SESSION['username'])) {
    // Redirect to the sign-in page if not logged in
    header("Location: signin.php");
    exit();
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- ... Your CSS and other links ... -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
       
    <h1>WELCOME USER</h3>    
    <a href="signout.php">Logout</a>
    
</body>
</html>
