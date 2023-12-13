<?php
include 'connect.php';
// Check if form is submitted
if (isset($_POST['submit'])) {
    
    function sanitize($data) {
        return htmlspecialchars(trim($data));
    }

    // Retrieve form data
    $firstName = isset($_POST['first_name']) ? sanitize($_POST['first_name']) : '';
    $lastName = isset($_POST['last_name']) ? sanitize($_POST['last_name']) : '';
    $email = isset($_POST['email']) ? sanitize($_POST['email']) : '';
    $phoneNumber = isset($_POST['phone_number']) ? sanitize($_POST['phone_number']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';  // Note: Do not sanitize passwords, use prepared statements instead

    // Server-side validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber) || empty($password)) {
        // Handle empty fields
        echo "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email
        echo "Invalid email address.";
    } elseif ($password !== $_POST['password-repeat']) {
        // Handle password mismatch
        echo "Passwords do not match.";
    } else {
        try {
            // PDO database connection (adjust based on your setup)
            $pdo = new PDO("mysql:host=localhost;dbname=mydb", "root", "password");
            
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Hash the password before storing it
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert data into the database using prepared statements
            $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, phone_number, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$firstName, $lastName, $email, $phoneNumber, $hashedPassword]);

            echo "Registration successful.";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            // Close connection
            $pdo = null;
        }
    }
} else {
    // Handle case when form is not submitted
    echo "Form not submitted.";
}
?>
