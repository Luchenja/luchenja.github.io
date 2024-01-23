<?php
// Include the database connection file
require_once '../db/db-conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file is selected
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        // Specify the upload directory
        $uploadDir = "uploads/";

        // Create the directory if it doesn't exist
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Generate a unique filename for the uploaded file
        $uploadFile = $uploadDir . uniqid() . "_" . basename($_FILES["image"]["name"]);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            // Image uploaded successfully
            echo "Image uploaded successfully. File path: " . $uploadFile;

            try {
                // Save the file path into the database using PDO and the timetableImage column
                $stmt = $conn->prepare("INSERT INTO timetable (timetableImage) VALUES (:timetableImage)");
                $stmt->bindParam(':timetableImage', $uploadFile);

                if ($stmt->execute()) {
                    echo "File path saved in the timetableImage column.";
                } else {
                    echo "Error saving file path in the timetableImage column.";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Please select a valid file.";
    }
}
?>
