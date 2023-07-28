<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["uname3"];
    $password = $_POST["pass3"];

    // Validate and sanitize the input (Optional but recommended)
    // TODO: Add your validation and sanitization code here if needed

    // Database connection settings
    $host = "localhost"; // Change this if your database is on a different host
    $dbUsername = "root"; // Change this to your database username
    $dbPassword = " "; // Change this to your database password
    $dbName = "database2"; // Change this to your database name

    // Create a database connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the table
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Data insertion was successful
        echo "Signup successful!";
        header('location:index.php');
    }
    } else {
        // Error occurred during insertion
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
{

$conn->close();
}
?>
