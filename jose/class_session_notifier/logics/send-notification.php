<?php
include '../db/db-conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $notificationMessage = htmlspecialchars($_POST["notification"]);
    $responseMessage = htmlspecialchars($_POST["response"]);

    // Validate and sanitize the data if needed

    // Insert data into the database
    $sql = "INSERT INTO courses (message, response) VALUES (?, ?)";

    try {
        // Using prepared statement to prevent SQL injection
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bindParam(1, $notificationMessage, PDO::PARAM_STR);
            $stmt->bindParam(2, $responseMessage, PDO::PARAM_STR);
            $stmt->execute();

            // Check for success or handle errors

            $stmt->closeCursor();
            

        } else {
            // Handle errors with the statement
            throw new Exception("Error preparing statement");
        }
    } catch (Exception $e) {
        // Handle other errors
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="post">
        <h4>Confirm your presence </h4>
        <label for="notification">Enter your message here</label>
        <textarea name="notification" id="notification" cols="20" rows="5"></textarea>

        <p>Not available today ? leave a text here</p>

        <label for="response"></label>
        <textarea name="response" id="response" cols="20" rows="5"></textarea>

        <input type="submit" name="submit" value="confirm">
    </form>
</body>
</html>
