<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="icon.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Site</title>
  <!-- Include Material Design Lite CSS -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <!-- Include Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    /* Center content in the viewport */
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #1c99e0;
    }
  </style>
</head>

<body>



    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="username">
    <label class="mdl-textfield__label" for="username">Enter your name</label>
    </div>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id="submit-button">
      Submit
    </button>

    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="location.href='about.php'">
      Go to About
    </button>

    <h2 id="welcome-message"></h2>

    <script>
      document.getElementById('submit-button').addEventListener('click', function() {
        var username = document.getElementById('username').value;
        var welcomeMessage = 'Welcome, ' + username + '!';
        document.getElementById('welcome-message').innerText = welcomeMessage;
      });
    </script>

</body>

</html>