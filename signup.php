<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "root";
$database = "PD2";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["new-username"];
    $email = $_POST["new-email"];
    $password = password_hash($_POST["new-password"], PASSWORD_DEFAULT);
    $course = $_POST["course"];

    // Insert user data into the database
    $sql = "INSERT INTO users (fullname, username, email, password, course) VALUES ('$fullname', '$username', '$email', '$password', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<!-- ... (your existing HTML code) ... -->

</html>
