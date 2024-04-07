<?php
session_start(); // get the session

// Unset or destroy session variables upon logout
$_SESSION = array(); // Clear all session variables
session_destroy(); // Destroy the session to start a new one with the new connection
echo '<script>window.location.href = "../accueil/accueil.php";</script>'; // redirect to the initial page
?>
