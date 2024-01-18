<?php
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database (update with your credentials)
    $conn = new mysqli("localhost", "root", "", "users");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and validate input data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check user credentials
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "Login successful!";
            $_SESSION['username'] = $username;
            header('Location: index.php');
            // You can redirect the user to a dashboard or another page here
        } else {
          echo '<script type="text/javascript">
          window.onload = function () { alert("Invalid Password");
            onclick = location.href="login.html"; }
    </script>'; 
        }
    } else {
      echo '<script type="text/javascript">
      window.onload = function () { alert("User Not found");
        onclick = location.href="login.html"; }
</script>'; 

    }

    // Close the database connection
    $conn->close();
}
?>
