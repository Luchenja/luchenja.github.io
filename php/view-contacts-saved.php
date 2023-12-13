<?php

require "mydb.php";

$sql = "SELECT id, first_name, last_name, email * FROM users ORDER BY id DESC";

$statement = $conn->prepare($sql);

$statement->execute();
$num = $statement->rowCount();

$users = $statement->fetchAll(PDO::FETCH_ASSOC);

