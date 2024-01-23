<?php
include '../db/db-conn.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $phonenumber = $_POST['telphone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO admin (username, phoneNumber,email , password) VALUES (:username, :phonenumber, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':phonenumber', $phonenumber);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        header('location:../admin/login.php');
    } catch (PDOException $e) {
        // Log the error or handle it appropriately
        echo "Error: Something went wrong with the registration.";
    }
}
?>
