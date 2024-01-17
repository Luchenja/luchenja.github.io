<?php
include'../db/db-conn.php';

$sql =" select * from courses";

$statement =$conn->prepare($sql);
$statement->execute();

$courses =$statement->fetchAll(PDO::FETCH_ASSOC);
?>