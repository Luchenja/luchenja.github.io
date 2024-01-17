<?php
include'../db/db-conn.php';

$results =[];
if (isset($_GET["id"])){
    $courseId = $_GET['id'];
    $sql = "Select * from courses  where id = $courseId";

    $statement = $conn->prepare($sql);
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

}   
?>