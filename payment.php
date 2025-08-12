<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f7f9fc;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #003087;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="email"], input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0070ba;
            color: white;
            margin-top: 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #005bb5;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Send Payment</h2>
        <form action="process_payment.php" method="POST">
            <label for="recipient">Recipient's Email:</label>
            <input type="email" id="recipient" name="recipient" placeholder="Enter recipient's email" required>
            
            <label for="amount">Amount ($):</label>
            <input type="text" id="amount" name="amount" placeholder="Enter amount" required>

            <input type="submit" value="Send Payment">
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2025 PayPal Clone. All Rights Reserved.</p>
    </div>
</body>
</html>
