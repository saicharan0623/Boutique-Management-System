<?php
session_start(); 
include 'db_config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to fetch user with given email and password
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect if user is found
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location:error.php");
        exit();
    }
}

$mysqli->close();
?>
