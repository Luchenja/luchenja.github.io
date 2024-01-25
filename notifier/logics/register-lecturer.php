<?php
include '../db/db-conn.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO lecturers (name, email, password) VALUES (:name, :email,:password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        header('location:../lecturer/login.php');
        

    } catch (PDOException $e) {
        // Log the error or handle it appropriately
        echo "Error: Something went wrong with the registration.";
    }
}
?>
