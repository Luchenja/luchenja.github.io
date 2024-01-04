<?php
include'./db/db.php';

if(isset($_POST['submit'])){
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $phonenumber =$_POST['phonenumber'];
    $email =$_POST['email'];
    $department =$_POST['departmentname'];


    $sql ="insert into employee(firstname,lastname,phonenumber,email) values('$firstname','$lastname',' $phonenumber ','$email','$department')";
    $conn->exec($sql);
}
?>