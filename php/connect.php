<?php

$servername = "localhost";
$username = "root";
$password = "password"; // If you have a password, provide it here
$dbname = "mydb";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
