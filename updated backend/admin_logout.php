<?php

// Initialize the session
session_start();
// Unset all of the session variables
$_SESSION['admin_login'] = false;
unset($_SESSION['admin_name']);
unset($_SESSION['admin_username']);
unset($_SESSION['application_num']);
// Redirect to login page
header("Location: admin_login.php");
exit;

?>