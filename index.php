<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "myDB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Book Sumaries</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <?php
        if (isset($_SESSION['u_ID'])) {
            echo '<li class="sidebar-brand">
                  <a class="js-scroll-trigger" href="logout.php">Logout</a>
                  </li>';
        }
        else {
            echo '<li class="sidebar-brand">
              <a class="js-scroll-trigger" href="login.php">Login</a>
              </li>';
        }

        ?>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#services">Categories</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#portfolio">Books</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Book Summaries</h1>
        <h3 class="mb-5">
            <em>Get access to key insights from 2,500+ bestselling books, transformed into powerful packs you can read or listen to in just 15 minutes.</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
    <div class="overlay"></div>
</header>

<!-- About -->
<section class="content-section bg-light" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>Big ideas in small packages!</h2><br/>
                <p class="lead mb-5">Once upon a time there were four friends. They exchanged notes and book summaries throughout their school years (and aced their exams because of it). Flash forward to 2012 and they’d all gotten jobs and lives and had less time than ever to read. They decided there had to be a better way to learn every day and still keep up with their jobs. And just like that, Blinkist was born! Four years later, we’ve hit a million users and blinked more than 2,500 titles of the world’s best nonfiction, distilling them into key insight summaries you can read in 15 minutes.</p>
                <!-- <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a> -->
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Categories</h3>
            <h2 class="mb-5">Explore 2,500+ top titles in 19 leading categories</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="fa fa-paper-plane"></i>
            </span>
                <h4>
                    <strong>Personal Growth & Self-Improvement</strong>
                </h4>
                <!-- <p class="text-faded mb-0">Looks great on any screen size!</p> -->
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="fa fa-comments-o"></i>
            </span>
                <h4>
                    <strong>Management & Leadership</strong>
                </h4>
                <!-- <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p> -->
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="fa fa-diamond"></i>
            </span>
                <h4>
                    <strong>Psychology</strong>
                </h4>
                <!-- <p class="text-faded mb-0">Millions of users
                  <i class="fa fa-heart"></i>
                  Start Bootstrap!</p> -->
            </div>
            <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="fa fa-book"></i>
            </span>
                <h4>
                    <strong>Literature</strong>
                </h4>
                <!-- <p class="text-faded mb-0">I mustache you a question...</p> -->
            </div>
        </div>
    </div>
</section>

<!-- Callout -->
<section class="callout">
    <div class="container text-center">
        <h2 class="mx-auto mb-5">Start reading now!</h2>
        <!-- <a class="btn btn-primary btn-xl" href="AdvancedWebProject/login.php">Sign-in Now!</a> -->
    </div>
</section>

<!-- Portfolio -->
<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0">Popular Books</h3>
            <h2 class="mb-5">The community’s most read titles</h2>
        </div>
        <div class="row no-gutters">

            <div class="col-lg-6 col-md-12">
                <a class="portfolio-item" href="books.php/#book1" sytle="width:100%; height: 50%; ">
              <span class="caption">
                <span class="caption-content">
                  <h2>TO KILL A MOCKINGBIRD</h2>
                  <p class="mb-0">
</p>
                </span>
              </span>
                    <img class="img-fluid mx-auto d-block" src="img/book1.jpg" alt="" >
                    <!-- <h1 class="text-hide" style="background-image: url('https://mdbootstrap.com/img/logo/mdb-transparent-250px.png'); width: 250px; height: 90px;">MDBootstrap</h1> -->
                </a>
            </div>

            <div class="col-lg-6 col-md-12">
                <a class="portfolio-item" href="books.php/#book2" sytle="width: 100%; height: 50%; ">
              <span class="caption">
                <span class="caption-content">
                  <h2>THE DIARY OF ANNE FRANK</h2>
                  <p class="mb-0">
</p>
                </span>
              </span>
                    <img class="img-fluid mx-auto d-block" src="img/book2.jpg" alt="" >
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>JANE EYRE</h2>
                  <p class="mb-0">  </p>
                </span>
              </span>
                    <img class="img-fluid  mx-auto d-block" src="img/book3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>MOBY DICK</h2>
                  <p class="mb-0"></p>
                </span>
              </span>
                    <img class="img-fluid  mx-auto d-block" src="img/book4.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="content-section bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">Find out more books...</h2>
        <a href="books.php" class="btn btn-xl btn-light mr-4">Go!</a>
    </div>
</section>

<!-- Map -->
<!-- <section id="contact" class="map">
  <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
  <br/>
  <small>
    <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
  </small>
</section> -->

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="icon-social-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Book Summaries 2018</p>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
