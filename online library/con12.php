<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);

    // SQL query to check if username and password match an entry in the database
    $sql = "SELECT * FROM userdetails WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful";
        header("Location: index-2.php");
        // You may perform further actions here, such as setting session variables or redirecting the user to a different page
    } else {
        echo "Invalid username or password";
    }
}

// Close database connection
$conn->close();
?>