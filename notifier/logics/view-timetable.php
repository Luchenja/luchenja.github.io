<?php
// Include the database connection file
include'../db/db-conn.php';

// Check if the courseID is provided in the query string
if (isset($_GET['courseID'])) {
    $courseID = $_GET['courseID'];

    try {
        // Query the database to retrieve the timetableImage for the selected courseID
        $stmt = $conn->prepare("SELECT timetableImage FROM timetable WHERE courseID = :courseID");
        $stmt->bindParam(':courseID', $courseID, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Display the image
            $timetableImage = $result['timetableImage'];
            header("Content-Type: image/*"); // Set the content type based on your image type
            readfile($timetableImage);
            exit();
        } else {
            echo "No timetable found for the selected course.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "CourseID not provided.";
}
?>
