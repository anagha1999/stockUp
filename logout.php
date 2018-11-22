<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
//header("location: login.php");
//exit;
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1> You've been logged out. Continue browsing our <a href= "copyhtml.php">website</a></h1>
  </body>
    </html>