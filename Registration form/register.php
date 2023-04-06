<?php

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email = $_POST['email'];
$password= $_POST['password'];

// create connection

$conn =mysqli_connect("localhost","root","","register form");
$q= "insert into registration value(NULL,'$firstname', '$lastname', '$email', '$password')";


//check connection
if (!$conn){
    die("Connection failed: " .mysqli_connect_error());


}
echo " Connected successfully";
?>