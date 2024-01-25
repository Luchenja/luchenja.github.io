<?php

require "../db/db-conn.php";

$sql = "Select * from students";

$statement = $conn->prepare($sql);
$statement->execute();

$students= $statement->fetchAll(PDO::FETCH_ASSOC);