<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT name, balance FROM users WHERE id = $user_id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial; background: #f0f8ff; }
        .container { margin: 20px; padding: 20px; background: white; border: 1px solid #0078D7; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $user['name']; ?></h1>
        <p>Balance: $<?php echo $user['balance']; ?></p>
        <a href="transactions.php">View Transactions</a> |
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
