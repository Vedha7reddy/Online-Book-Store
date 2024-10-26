<?php
include "database.php";
$username=$_POST["name"];
$password=$_POST["pspd"];

$sql="SELECT * from users WHERE name='$username' AND pspd='$password'";
$result=$connection->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
    header('Location: bookstypes.html'); 
    exit;
}
else
    echo "<script>alert('Invalid Credentials!')</script>";
    $connection->close();
?>