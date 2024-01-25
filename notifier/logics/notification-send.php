<?php
// process_form.php

// Include the database connection file
include('../db/db-conn.php');

// Get form data
$message = $_POST['message'];
$timestamp = $_POST['timestamp'];
$sessionTime = $_POST['time'];

// Concatenate message, timestamp, and sessionTime
$dataToInsert = $message . ' - ' . $timestamp . ' - ' . $sessionTime;

// Prepare and execute the SQL statement
try {
    $stmt = $conn->prepare("INSERT INTO students (session) VALUES (:dataToInsert)");
    $stmt->bindParam(':dataToInsert', $dataToInsert, PDO::PARAM_STR);
    $stmt->execute();
    echo "Form submitted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the PDO connection (optional, as PHP will automatically close it at the end of the script)
$pdo = null;

