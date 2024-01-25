<?php
// Start the session
session_start();

include '../db/db-conn.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM students WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
            $hashedPassword = $row['password'];

            // Verify the entered password with the stored hashed password
            if (password_verify($password, $hashedPassword)) {
                // Password is correct, set the student ID in the session
                $_SESSION['student_id'] = $row['student_id'];

                // Redirect to the desired page
                header('location: ../student/dashboard.php');
                exit(); // Ensure script stops after redirection
            } else {
                // Password is incorrect
                echo "Invalid email or password";
            }
        } else {
            // User with the provided email does not exist
            echo "Invalid email or password";
        }
    } catch (PDOException $e) {
        // Log the error or handle it appropriately
        echo "Error: Something went wrong with the login.";
    }
}

