<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal - Secure Payments</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
        }

        /* Navbar */
        .navbar {
            background-color: #003087;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
        }

        .navbar .btn {
            background-color: #0070ba;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
        }

        .navbar .btn:hover {
            background-color: #005bb5;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 50px 20px;
            background-color: #ffffff;
        }

        .hero h2 {
            color: #003087;
        }

        .hero p {
            font-size: 1.1em;
            color: #555;
            margin: 20px 0;
        }

        .hero .btn-primary {
            background-color: #0070ba;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            text-decoration: none;
        }

        .hero .btn-primary:hover {
            background-color: #005bb5;
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: space-around;
            padding: 50px 20px;
            background-color: #f7f9fc;
        }

        .feature-box {
            text-align: center;
            width: 30%;
        }

        .feature-box h3 {
            color: #0070ba;
        }

        .feature-box p {
            color: #555;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #003087;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1>PayPal</h1>
        <div>
            <?php if ($isLoggedIn): ?>
                <a href="logout.php" class="btn">Logout</a>
            <?php else: ?>
                <a href="signup.php" class="btn">Sign Up</a>
                <a href="login.php" class="btn">Login</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <h2>Welcome to PayPal</h2>
        <p>Securely send, receive, and manage your payments with confidence.</p>
        <a href="payment.php" class="btn-primary">Get Started</a>
    </div>

    <!-- Features Section -->
    <div class="features">
        <div class="feature-box">
            <h3>Fast Transfers</h3>
            <p>Send and receive payments instantly.</p>
        </div>
        <div class="feature-box">
            <h3>Secure Payments</h3>
            <p>Encrypted transactions for your safety.</p>
        </div>
        <div class="feature-box">
            <h3>Global Reach</h3>
            <p>Make payments worldwide with ease.</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 PayPal Clone. All Rights Reserved.</p>
    </div>
</body>
</html>
