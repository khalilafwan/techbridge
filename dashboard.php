<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to login page
    header('Location: login.php');
    exit();
}

// Retrieve the user data from the session
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBridge - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/img/techbridge/logo.png" rel="icon">
    <style>
        :root {
            --primary-blue: #003B73;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            padding: 15px 0;
        }
        .navbar-brand img {
            height: 40px;
        }
        .dashboard-header {
            padding: 40px 0;
            background-color: var(--primary-blue);
            color: white;
            text-align: center;
        }
        .welcome-message {
            padding: 40px;
            text-align: center;
        }
        .logout-btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
        }
        .logout-btn:hover {
            background-color: #002b5c;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/techbridge/logo.png" alt="TechBridge Logo">
            </a>
            <a class="btn btn-primary" href="login.php">Log Out</a>
        </div>
    </nav>

    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <h1>Welcome to Your Dashboard!</h1>
        <p>Logged in as: <strong><?php echo htmlspecialchars($email); ?></strong></p>
    </div>

    <!-- Welcome Message -->
    <div class="welcome-message">
        <h2>Hi, <?php echo htmlspecialchars($email); ?>!</h2>
        <p>Welcome back to TechBridge. This is your dashboard.</p>
        <a href="login.php">
            <button class="logout-btn">Log Out</button>
        </a>
    </div>

    <!-- Footer (Optional) -->
    <footer class="text-center py-4" style="background-color: var(--primary-blue); color: white;">
        <p>&copy; 2024 TechBridge. All rights reserved.</p>
    </footer>

</body>
</html>
