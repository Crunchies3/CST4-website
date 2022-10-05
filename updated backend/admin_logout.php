<?php
// Initialize the session
session_start();
 
// Unset all of the session variables

$_SESSION['admin_login'] = false;
unset($_SESSION['admin_name']);
unset($_SESSION['admin_username']);
unset($_SESSION['application_num']);

// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: admin_login.php");
exit;
?>  