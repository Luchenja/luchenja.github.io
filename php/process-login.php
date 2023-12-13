<?php
// Include database connection
require 'connect.php';

if (isset($_POST['submit'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($email) || empty($password)) {
        // Redirect with an error message
        header('Location: login.php?error=Email and password are required.');
        exit();
    } else {
        try {
            // Use a prepared statement to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            // Check if the user exists
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify the password
                if (password_verify($password, $user['password'])) {
                    // Password is correct, you can proceed with further actions

                    // Redirect to index.php
                    header('Location: index.php');
                    exit();
                } else {
                    // Password is incorrect
                    // Redirect with an error message
                    header('Location: login.php?error=Incorrect password.');
                    exit();
                }
            } else {
                // User does not exist
                // Redirect with an error message
                header('Location: login.php?error=User not found.');
                exit();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    // Form not submitted
    // Redirect with an error message
    header('Location: login.php?error=Form not submitted.');
    exit();
}
?>
