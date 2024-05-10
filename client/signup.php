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
    $course = mysqli_real_escape_string($conn, $_POST["course"]);

    // Insert data into the database
    $sql = "INSERT INTO users (fullname, username, email, password, course) VALUES ('$fullname', '$username', '$email', '$password', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
       window.onload = function () { alert("User Registered");
        onclick = location.href="login.html"; }
        </script>'; 
        
    } else {
        echo '<script type="text/javascript">
       window.onload = function () { console.log("Something went wrong");}
        </script>'; 
        echo "Test Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>