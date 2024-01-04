<?php
$server='localhost';
$user='root';
$password='';

try{
    $conn = new PDO("myqsl:host=$server;dbname=tipm",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo"Error ".$e->getMessage();
}



?>