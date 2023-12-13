<?php
// Handle logout action
if (isset($_GET['logout'])) {
    // Perform any cleanup or additional actions if needed

    // Redirect to the login page or any other page as needed
    header("Location: login.php");
    exit();
}
?>
