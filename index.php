<?php
include("C:/xampp/htdocs/Rohith-main/login.html");
include("database.php");
$user=$_POST["user"];
$password=$_POST['password'];
$email=$_POST['Email'];
$echo=('$user');


$sql="INSERT INTO signup(username,password,email) VALUES ('$user','$password','$email')";

mysqli_query($conn, $sql);


mysqli_close($conn);
?>