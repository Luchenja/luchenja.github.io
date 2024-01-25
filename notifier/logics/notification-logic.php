<?php
// Include your PDO connection file
include 'pdo_connection.php'; // Update the path based on your project structure

// Assuming you have a student ID, you can get it from the session or another source
$studentId = $_SESSION['student_id']; // Replace with your actual method of obtaining the student ID

try {
    // Prepare the SQL query to fetch notifications for the student
    $sql = "SELECT notifications.message, notifications.timestamp, notifications.status, lecturers.name AS sender_name
            FROM notifications
            INNER JOIN lecturers ON notifications.senderID = lecturers.id
            WHERE notifications.receiverID = :studentId
            ORDER BY notifications.timestamp DESC";

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
