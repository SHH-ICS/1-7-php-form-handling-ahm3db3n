<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About the Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e6f7ff;
      text-align: center;
    }

<audio
<source src="Julian Pernett Castilla - Piano Sessions.mp3"
</audio
    h1 {
      color: #3399ff;
    }

    a {
      text-decoration: none;
      color: #3399ff;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>About the Website</h1>
  <p>This website is based on an open SSH client.</p>

  <?php
  // Set the timezone
  date_default_timezone_set('America/New_York');

  // Get the current date and time
  $currentDateTime = date('l, F j, Y \a\t g:i A');
  ?>

  <p>Current date and time:
    <?php echo $currentDateTime; ?>
  </p>

  <nav>
    <a href="index.php">Back to Home</a>
  </nav>
</body>
</html>