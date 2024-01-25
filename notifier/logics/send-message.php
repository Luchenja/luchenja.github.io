<?php
include'../db/db-conn.php';
if(isset($_POST['submit'])){
    $sessions = $_POST['session'];
    

    try{
        $sql ="insert into students(session) values( '$sessions')";
        $conn->exec($sql);

    }
    catch (PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}
?>