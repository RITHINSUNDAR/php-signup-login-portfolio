<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a database connection established already
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "database2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the submitted username and new password
    $username = $_POST["uname1"];
    $newPassword = $_POST["pass1"];

    // Validate the input (you can add more validation as needed)
    if (strlen($newPassword) < 8) {
        echo "Password should be at least 8 characters long.";
    } else {
        // Assuming you have a column in the table for the username
        $sql = "UPDATE users SET password = '$newPassword' WHERE username = '$username'";

        if ($conn->query($sql) === TRUE) {
            echo "Password updated successfully.";
            header('location:index.php');
        } else {
            echo "Error updating password: " . $conn->error;
        }
    }

    $conn->close();
}
?>
