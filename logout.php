<?php
session_start();

// Unset or destroy session variables upon logout
$_SESSION = array(); // Clear all session variables
session_destroy(); // Destroy the session
echo '<script>window.location.href = "accueil.php"</script>'; // redirect to the initial page
?>
