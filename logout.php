<?php
session_start();
session_destroy(); // End user session
header('Location: home.php'); // Redirect to home page
exit();
?>
