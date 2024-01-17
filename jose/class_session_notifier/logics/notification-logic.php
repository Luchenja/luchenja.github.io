<?php
// Include your PDO connection file or establish the connection here
include '../db/db-conn.php';// Replace with the actual path to your PDO connection file

// Assuming you have a student ID, you can get it from the session or another source
$studentId = $_SESSION['student_id']; // Replace with your actual method of obtaining the student ID

try {
    // Prepare the SQL query
    $sql = "SELECT courses.id, courses.message FROM students
            INNER JOIN courses ON students.courseid = courses.id
            WHERE students.id = :studentId";

    // Use a prepared statement to avoid SQL injection
    $stmt = $pdo->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':studentId', $studentId, PDO::PARAM_INT);

    // Execute the query
    $stmt->execute();

    // Fetch the notifications as an associative array
    $notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the result as JSON
    echo json_encode($notifications);

} catch (PDOException $e) {
    // Handle any database connection or query errors
    echo json_encode(array('error' => $e->getMessage()));
}

// Close the database connection
$pdo = null;
?>
