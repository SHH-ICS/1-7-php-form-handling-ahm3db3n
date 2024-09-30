<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $welcomeMessage; ?></h1>
        <p>We're glad to have you here!</p>
        <a href="login.php">Login</a> | <a href="register.php">Register</a>
    </div>
</body>
</html>
