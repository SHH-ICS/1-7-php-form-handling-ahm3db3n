# PHPFormPage

This will be your starter code for your webpage.

We will move away from linting as a requirement for now. Feel free to use it if you find it helpful though.

<p>To test out your page right in CodeSpaces, run the following command in the terminal:</p>

<ol>
  <php -S 0.0pre>.0.0:8000
</ol>
</pre>

php -S 0.0.0.0:8000


<?php
// Start the session
session_start();

// Set a welcome message
$welcomeMessage = "Welcome to Our Website!";

// Check if the user is logged in and customize the message
if (isset($_SESSION['username'])) {
  $welcomeMessage = "Welcome back, " . htmlspecialchars($_SESSION['username']) . "!";
}
?>