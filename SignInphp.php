<?php
 include "database.php";   
 if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["pspd"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["pspd"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pspd"];

    // Prepare and bind statement
    $stmt = $connection->prepare("INSERT INTO users (name, email, pspd) VALUES (?, ?, ?)");
    $stmt->bind_param("sss",$name, $email, $password);

    // Execute statement
    if ($stmt->execute()) {
        $stmt->close();
        $connection->close();
        header('Location: login.html');
        exit;
    } else {
        echo "<script>alert('SignUp is not successful')</script>";
        $stmt->close();
        $connection->close();
    }
} else {
    echo "<script>alert('Name, Email and password are required')</script>";
}
?>