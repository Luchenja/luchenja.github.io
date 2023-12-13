<?php
require 'connect.php';
function handleRegistraion(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $result = registerUser(
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['phone_number'],
            $_POST['password'],
            $_POST['confirm_password']
        );
        
        if ($result===true){
            echo "User Registration successifull!";
        }else{
            echo "Err registration user: $result";
        }
    }
}

function registerUser($first_name, $last_name,$email,$phone_number,$password, $confirm_password){
    if (!validateUserInput($first_name, $last_name,$email,$phone_number,$password, $confirm_password)){
        return "Invalid input. Please check your data";
    }
    $result = insertUser($first_name, $last_name,$email,$phone_number,$password);

    if($result === true){
        return true;
    }else{
        return"Error registering user: $result";
    }
}

function validateUserInput($first_name, $last_name,$email,$phone_number,$password, $confirm_password){
    $nameRegex = "/^[a-zA-Z'-]+$/";
    $phoneRegex = "/^[0-9]+$/";

    return(
        preg_match($nameRegex, $first_name) &&
        preg_match($nameRegex,$last_name) &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        strlen($password) >= 8 &&
        $password === $confirm_password
    );
}
function insertUser($first_name, $last_name,$email,$phone_number,$password){
    try{
        $pdo = new PDO('mysql:host=localhost;dbnamemydb','root', 'password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare('INSERT INTO users (first_name, last_name,email,phone_number,password) VALUES ($first_name, $last_name,$email,$phone_number,$password)');
        $stmt->execute([$first_name, $last_name,$email,$phone_number,$hashedPassword]);

        return true;
    }catch(PDOException $e){
        return $e->getMessage();
    }
}
