<!DOCTYPE html>
<html lang="zxx">


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
                <h2>Books</h2>
                <span class="underline center"></span>
                <p class="lead">A room without books is like a body without a soul.</p>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-media-gird">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Search Section -->
                            <form action="book2.php" method="post">
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>What are you looking for at the library?</h3>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                                    <input class="form-control" placeholder="Search by Keyword" id="book_name" name="book_name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" id="author" name="author" placeholder="author name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                            
                            <!-- End: Search Section -->
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-push-3">
                                <div class="filter-options margin-list">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <select name="orderby">
                                                <option selected="selected">Default sorting</option>
                                                <option>Sort by popularity</option>
                                                <option>Sort by rating</option>
                                                <option>Sort by newest</option>
                                                <option>Sort by oldest</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="filter-result">Showing items 1 to 9 of 19 total</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="books-gird">
                                    <ul>
                                        <li>
                                            <figure>
                                                <img src="https://media.springernature.com/full/springer-static/cover-hires/book/978-1-4842-1371-1"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>learn to Program with c.</strong></p>
                                                    <p><strong>Author:</strong> NOEL KALICHARAN</p>
                                                </figcaption>
                                            </figure>
                                            <div class="single-book-box">
                                                <div class="post-detail">
                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">learn to Program with
                                                                c.</a></h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> NOEL KALICHARAN</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book provides a comprehensive introduction to C programming, covering a wide range of topics from basic to advanced. It includes numerous examples, exercises, and case studies.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://www.cprogramming.com/books/cover_with_border_jumping_into_C++.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>JUMPING INTO C++.</strong></p>
                                                    <p><strong>Author:</strong> ALEX ALLAIN</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">
                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">JUMPING INTO C++.</a>
                                                        </h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> ALEX ALLAIN</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>Suitable for beginners and programmers with some experience, this book offers a fast-paced introduction to C++. It focuses on practical programming techniques and uses a hands-on approach with exercises.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://www.oreilly.com/api/v2/epubs/9781430206347/files/images/Cover.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>BEGINNING PYTHON.</strong></p>
                                                    <p><strong>Author:</strong> MAGNUS LIE HETLAND.</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">BEGINNING PYTHON.</a>
                                                        </h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> MAGNUS LIE HETLAND</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book focuses on practical programming tasks and teaches Python through examples of automating everyday tasks. It's beginner-friendly and suitable for those interested in using Python for scripting and automation.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://m.media-amazon.com/images/I/619K41Rk9hL._AC_UF1000,1000_QL80_.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>R PROGRAMMING FOR BEGINNERS</strong></p>
                                                    <p><strong>Author:</strong> SANDHYA ARORA & LATESH MALIK</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a href="books-media-detail-v1.html">R
                                                                PROGRAMMING FOR BEGINNERS</a></h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> SANDHYA ARORA & LATESH MALIK
                                                            </li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book offers a collection of recipes for performing
                                                            common tasks in R, such as data manipulation, statistical
                                                            analysis, and graphical representation. It's a practical
                                                            guide for R users of all levels.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://m.media-amazon.com/images/I/61a-yuJ+aWL._AC_UF1000,1000_QL80_.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>OPERATING SYSTEMS</strong></p>
                                                    <p><strong>Author:</strong> S. CHAND</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">OPERATING SYSTEMS</a>
                                                        </h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> S. CHAND</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book is widely used as a textbook in operating systems
                                                            courses. It covers fundamental concepts such as process
                                                            management, memory management, file systems, and I/O systems
                                                            in depth.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://rukminim2.flixcart.com/image/850/1000/kqmo8sw0/book/g/l/2/computer-organization-and-architecture-original-imag4hnyje6jhgps.jpeg?q=20&crop=false"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>COMPUTER ORGANIZATION AND ARCHITECTURE </strong></p>
                                                    <p><strong>Author:</strong> IKVINDERPAL SINGH & BALJINDER SINGH</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">COMPUTER ORGANIZATION
                                                                AND ARCHITECTURE </a></h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> IKVINDERPAL SINGH & BALJINDER
                                                                SINGH</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book is a widely used textbook that covers both the
                                                            hardware and software aspects of computer systems. It
                                                            provides a thorough introduction to topics such as digital
                                                            logic, instruction set architecture, processor design,
                                                            memory systems, and input/output.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://m.media-amazon.com/images/I/71RbT8T+agL._AC_UF1000,1000_QL80_.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>MACHINE LEARNING</strong></p>
                                                    <p><strong>Author:</strong> SAMUEL HACK</p>
                                                </figcaption>
                                            </figure>
                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">MACHINE LEARNING</a>
                                                        </h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> SAMUEL HACK</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book provides a comprehensive introduction to machine
                                                            learning concepts and algorithms, covering topics such as
                                                            supervised learning, unsupervised learning, Bayesian
                                                            methods, and neural networks. It's suitable for both
                                                            beginners and advanced learners.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://m.media-amazon.com/images/I/41R5QH1jRwL._AC_UF1000,1000_QL80_.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>DEEP LEARNING</strong></p>
                                                    <p><strong>Author:</strong> M. GOPAL</p>
                                                </figcaption>
                                            </figure>
                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">DEEP LEARNING</a></h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> M. GOPAL</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book is considered the bible of deep learning. It covers
                                                            the theoretical foundations of deep learning, including
                                                            feedforward networks, convolutional networks, recurrent
                                                            networks, generative models, and more. It's suitable for
                                                            both beginners and advanced learners.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://www.oreilly.com/api/v2/epubs/9781118697115/files/images/MyCoverImage.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>CYBERSECURITY</strong></p>
                                                    <p><strong>Author:</strong> THOMAS J. MOWBRAY</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">CYBERSECURITY</a></h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> THOMAS J. MOWBRAY</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book provides a comprehensive overview of cybersecurity
                                                            concepts, principles, and best practices. It covers topics
                                                            such as network security, cryptography, risk management, and
                                                            incident response.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://rukminim2.flixcart.com/image/850/1000/kjd6nww0-0/book/u/m/w/computer-networking-original-imafyxja75txh3tg.jpeg?q=20&crop=false"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>COMPUTER NETWORKING </strong></p>
                                                    <p><strong>Author:</strong>JAMES F. KUROSE & KEITH W. ROSS</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">COMPUTER NETWORKING
                                                            </a></h3>
                                                        <ul>
                                                            <li><strong>Author:</strong>JAMES F. KUROSE & KEITH W. ROSS
                                                            </li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book provides a comprehensive introduction to computer
                                                            networking, covering topics such as the Internet, network
                                                            protocols, network architecture, and network security. It
                                                            takes a top-down approach, starting with applications and
                                                            working down to the underlying networking technologies.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://m.media-amazon.com/images/I/51UoSXAv9kL.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>GATE 2023 CS & IT</strong></p>
                                                    <p><strong>Author:</strong> GKP </p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">GATE 2023 CS & IT</a>
                                                        </h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> GKP </li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book is specifically tailored for the GATE CS & IT exam
                                                            and covers a wide range of topics with comprehensive theory,
                                                            examples, and practice questions. It's a popular choice
                                                            among GATE aspirants.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="https://m.media-amazon.com/images/I/41Xtj8H5QSL.jpg"
                                                    class="books-image" alt="Book">
                                                <figcaption>
                                                    <p><strong>STOCK MARKET</strong></p>
                                                    <p><strong>Author:</strong> P R SUNDAR</p>
                                                </figcaption>
                                            </figure>

                                            <div class="single-book-box">
                                                <div class="post-detail">

                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                href="books-media-detail-v1.html">STOCK MARKET</a></h3>
                                                        <ul>
                                                            <li><strong>Author:</strong> P R SUNDAR</li>
                                                            <li><strong>ISBN:</strong> 9781581573268</li>
                                                        </ul>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>This book offers a comprehensive overview of investing
                                                            principles and strategies. It covers topics such as
                                                            efficient market theory, asset allocation, passive
                                                            investing, and the role of psychology in investing
                                                            decisions.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-primary"
                                                            href="books-media-detail-v1.html">Read More</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <nav class="navigation pagination text-center">
                                    <h2 class="screen-reader-text">Posts navigation</h2>
                                    <div class="nav-links">
                                        <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i>
                                            Previous</a>
                                        <a class="page-numbers" href="#.">1</a>
                                        <span class="page-numbers current">2</span>
                                        <a class="page-numbers" href="#.">3</a>
                                        <a class="page-numbers" href="#.">4</a>
                                        <a class="next page-numbers" href="#.">Next <i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-3 col-md-pull-9">
                                <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                    <div class="widget widget_related_search open" data-accordion>
                                        <h4 class="widget-title" data-control>Related Searches</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Subject</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Authors</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Series</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Other Searches</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_narrow_search" data-accordion>
                                        <h4 class="widget-title" data-control>Narrow your search</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Type of Material</h5>
                                                <div class="widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks">
                                                            ebooks</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Publishing Date </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            Before 2000</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> 2000 - 2005</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> 2005 - 2010</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> 2010 - 2015</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> 2015 -2020</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> 2020 -2024</label>
                                                    </form>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Popularity </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks">
                                                            ebooks</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Language </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            ENGLISH</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> HINDI</label>
                                                        <label><input type="checkbox" name="material" value="ebooks">
                                                            TELUGU</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> TAMIL</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> MALYALAM</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked>KANNADA</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_recent_releases">
                                        <h4 class="widget-title">New Releases</h4>
                                        <ul>
                                            <li><a href="#">Books</a></li>
                                            <li><a href="#">News & Events</a></li>
                                            <li><a href="#">Magazines</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

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