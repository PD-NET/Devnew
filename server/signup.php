<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database (update with your credentials)
    $conn = new mysqli("localhost", "root", "", "users");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and validate input data
    $fullname = $_POST["fullname"];
    $username = $_POST["new-username"];
    $email = $_POST["new-email"];
    $password = password_hash($_POST["new-password"], PASSWORD_DEFAULT);
    $course = $_POST["course"];

    // Issue 1: SQL Injection Vulnerability - Use Prepared Statements
    $sql = "INSERT INTO users (fullname, username, email, password, course) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssss", $fullname, $username, $email, $password, $course);

    // Execute the statement
    if ($stmt->execute()) {
        // Issue 2: Plain Text Password in JavaScript - Avoid displaying password
        echo '<script type="text/javascript">
                window.onload = function () { 
                    alert("User Registered"); 
                    // Issue 3: JavaScript Redirect Syntax - Use window.location.href
                    window.location.href = "login.html"; 
                }
              </script>'; 
    } else {
        // Issue 4: Limited Error Handling - Provide a generic error message
        echo "Error: User registration failed. Please try again later.";
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
