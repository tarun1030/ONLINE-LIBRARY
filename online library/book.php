<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
   <form method="post" action="book1.php">
   <?php 
    echo htmlspecialchars($_SERVER["PHP_SELF"]); 
    ?>

    <label for="book_name">Book Name:</label><br>
    <input type="text" id="book_name" name="book_name"><br>
    
    <label for="author">Author:</label><br>
    <input type="text" id="author" name="author"><br>
    
    <label for="entry_concept">Entry Concept:</label><br>
    <textarea id="entry_concept" name="entry_concept"></textarea><br>
    
    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location"><br>
    
    <label for="cover_page">Cover Page (URL):</label><br>
    <input type="text" id="cover_page" name="cover_page"><br>
    
    <input type="submit" value="Submit">
</form>
</body>
</html>