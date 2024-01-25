<?php


include'../db/db-conn.php';

if (isset($_GET["id"])) {
    $contactId = $_GET['id'];
    $sql = "update students set session= NULL where id=$contactId";
    $stm = $conn->prepare($sql);
    $stm->execute();
    
}