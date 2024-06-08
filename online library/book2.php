<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>LIBRARY</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Accordion Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.accordion.css">

    <!-- Stylesheet -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        <style>
            h4{
                font-family: Courier New, Monospace;
            }
  
    h1,h3,strong{
        text-align: center;
      color:#ff6600;}
  </style>

</head>
<body>
 <!-- Start: Header Section -->
 <header id="header-v1" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index-2.html">
                                            <img src="images\LIBRARY (3).png" alt="LIBRARY">
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:+91-9182928524"><i class="fa fa-phone"></i>+91-9182928524</a>
                                            <span>/</span>
                                            <a href="mailto:srkrlibrary@srkrec.ac.in"><i
                                                    class="fa fa-envelope"></i>srkrlibrary@srkrec.ac.in</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="topbar-links">
                                            <a href="login.php"><i class="fa fa-lock"></i>Login / Register</a>
                                            <span>|</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                            href="index-2.php">Home</a>
                                    </li>
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                            href="books-media-grid-view-v1.php">Books </a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                            href="news-events-list-view.php">News &amp; Events</a>

                                    </li>

                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Book Info</h2>
                <span class="underline center"></span>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!--<h1 style="text-align: center; color: #ff6600;">Book Info</h1> -->

    
    
    <?php
    function sanitize($input) {
        // Implement your sanitization logic here
        // For example, you can use mysqli_real_escape_string to escape special characters
        global $conn;
        return mysqli_real_escape_string($conn, $input);
    }
    
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "library");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve book information
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_name = sanitize($_POST['book_name']);
    $author = sanitize($_POST['author']);
    $sql = "SELECT * FROM books WHERE book_name='$book_name' AND author='$author'";
    $result = $conn->query($sql);
    echo '<div style="display: flex; justify-content: center; align-items: center;width: 2000px; height: 110vh;">'; // Flex container for centering
    if ($result->num_rows > 0) {
        // Output data of each row
        echo '<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 50px auto; width: 1000px;">'; // Your existing grid with increased gap
        while($row = $result->fetch_assoc()) {
            echo '<div style="border: 1px; padding: 15px;">'; // Increased padding for each book entry
            echo '<h1 style="margin-bottom: 10px;">' . $row["book_name"] . '</h1>'; // Added margin bottom to h1 for spacing
            echo '<img src="' . $row["cover_page"] . '" style="display: block; margin: 0 auto; width: 250px; height: 350px; max-width: 100%; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 10px;" alt="Book Cover Page">'; // Added margin bottom to image for spacing
            echo '<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">'; // Increased gap for inner grid
            echo '<div><h3><strong>Author:</strong></h3></div>';
            echo '<div><h4>' . $row["author"] . '</h4></div>';
            echo '<div><h3><strong>Book Entry Concept:</strong></h3></div>';
            echo '<div><h4>' . $row["entry_concept"] . '</h4></div>';
            echo '<div><h3><strong>Location:</strong></h3></div>';
            echo '<div><h4>' . $row["location"] . '</h4></div>';
            echo '</div>'; // Close inner grid for details
            echo '</div>'; // Close book entry div
        }
        echo '</div>'; // Close grid for all books
    } else {
        echo '<h1>No Book Found</h1>'; // Message when no books are found
    }
    echo '</div>'; // End of center alignment container
    
}
    // Close connection
    $conn->close();
    ?>

<!-- Start: Social Network -->
<section class="social-network section-padding">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Follow Us</h2>
                <span class="underline center"></span>

            </div>
            <ul>
                <li>
                    <a class="facebook" href="#" target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" target="_blank">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="google" href="#" target="_blank">
                        <span>
                            <i class="fa fa-google-plus"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <span>
                            <i class="fa fa-rss"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <span>
                            <i class="fa fa-linkedin"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="#" target="_blank">
                        <span>
                            <i class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->

    <!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">
                    <div class="col-md-4 col-sm-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            <h3 class="footer-widget-title">About Library</h3>
                            <span class="underline left"></span>
                            <div class="textwidget">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking.
                            </div>
                            <address>
                                <div class="info">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Sagi Rama Krishnam Raju (SRKR) Engineering College
                                        SRKR Marg, China Amiram,
                                        Bhimavaram, A.P, India - 534204.</span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="mailto:srkrlibrary@srkrec.ac.in">srkrlibrary@srkrec.ac.in</a></span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <span><a href="tel:+91 9182928524">+91 9182928524</a></span>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="text-4" class="widget widget_text">
                            <h3 class="footer-widget-title">Timing</h3>
                            <span class="underline left"></span>
                            <div class="timming-text-widget">
                                <time datetime="2017-02-13">Mon - Fri: 9 am - 9 pm</time>
                                <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                            </div>
                        </div>
                    </div>
                    <div class="sub-footer">
                        <div class="container">
                            <div class="row">
                                <div class="footer-text col-md-3">
                                </div>
                                <div class="col-md-9 pull-right">
                                    <ul>
                                        <li><a href="index-2.php">Home</a></li>
                                        <li><a href="books-media-grid-view.php">Books &amp; Media</a></li>
                                        <li><a href="news-events-list-view.php">News &amp; Events</a></li>
                                        <li><a href="contact.php">Contact</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
    </footer>

</body>
</html>
