<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform database query to check if the username and password are valid
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Login successful
        echo "success";
    } else {
        // Login failed
        echo "error";
    }
}
?>
