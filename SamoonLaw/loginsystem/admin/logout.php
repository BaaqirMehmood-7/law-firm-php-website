<?php
session_start();

// Unset all session variables
unset($_SESSION['login']);
unset($_SESSION['adminid']);

// Clear the session array
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to index page with a logout message
header("Location: index.php?logout=success");
exit();
?>
