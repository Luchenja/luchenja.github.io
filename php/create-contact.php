<?php
// Include database connection
require 'connect.php';

if (isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form data
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone_number) || empty($password) || empty($confirm_password)) {
        echo "Please fill in all the required fields.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Hash the password before storing in the database (for security)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database
        try {
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, phone_number, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$first_name, $last_name, $email, $phone_number, $hashed_password]);

            // Check if the data is inserted
            $count = $stmt->rowCount();
            if ($count > 0) {
                header('Location: login.php');
                exit();
            } else {
                echo "Registration failed. Please try again.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "Form not submitted.";
}
?>
