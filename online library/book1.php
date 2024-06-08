<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to database
        $conn = mysqli_connect("localhost", "root", "", "library");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare data for insertion (sanitize inputs to prevent SQL injection)
        $book_name = mysqli_real_escape_string($conn, $_POST['book_name']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $entry_concept = mysqli_real_escape_string($conn, $_POST['entry_concept']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        // Assuming cover_page is a VARCHAR field containing the path or URL of the cover image
        $cover_page = mysqli_real_escape_string($conn, $_POST['cover_page']);

        // SQL query to insert book details
        $sql = "INSERT INTO books (book_name, author, entry_concept, location, cover_page) 
                VALUES ('$book_name', '$author', '$entry_concept', '$location', '$cover_page')";

        if ($conn->query($sql) === TRUE) {
            echo "New book entry created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
    ?>
</body>
</html>
