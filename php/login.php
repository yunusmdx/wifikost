<?php
session_start();

// Dummy credentials (Replace with database connection)
$users = [
    "admin" => "12345",
    "user" => "password"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Credentials!'); window.location.href='index.php';</script>";
    }
}
?>
