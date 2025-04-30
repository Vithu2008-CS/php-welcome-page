<?php
    $username = "Guest"; // You can replace this with dynamic username logic
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 3em;
            color: #333;
        }

        p {
            font-size: 1.2em;
            margin-top: 10px;
        }

        .button {
            margin-top: 30px;
            display: inline-block;
            padding: 10px 25px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }

        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome Home, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>We're glad to have you here. Make yourself comfortable and explore the site.</p>
        <a href="#" class="button">Explore Now</a>
        <div class="footer">
            &copy; <?php echo date("Y"); ?> YourWebsiteName. All rights reserved.
        </div>
    </div>
</body>
</html>
