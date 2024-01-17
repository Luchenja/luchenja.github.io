<?php
include '../db/db-conn.php';

if(isset($_POST['submit']) && isset($_FILES["timetableImage"])) {
    $coursename = $_POST['coursename'];
    $coursecode = $_POST['coursecode'];
    $department = $_POST['department'];

    // File upload handling
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["timetableImage"]["name"]);

    // Check if file is set and not empty
    if ($_FILES["timetableImage"]["size"] > 0) {
        $check = getimagesize($_FILES["timetableImage"]["tmp_name"]);
        if($check !== false) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["timetableImage"]["tmp_name"], $targetFile)) {
                try {
                    // Insert data into the courses table
                    $sql = "INSERT INTO courses (coursename, coursecode, department, timetableImage) VALUES ('$coursename', '$coursecode', '$department', '$targetFile')";
                    $conn->exec($sql);
                    echo "Course created successfully";
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "Sorry, there was an error uploading your file.";    
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        echo "Please choose an image file.";
    }
}
?>
