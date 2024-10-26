<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="webb";

$connection=new mysqli($servername, $username, $password, $database);

if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
}
else{
    echo "<script>alert('Connected Database')</script>";
}
?>