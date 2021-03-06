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
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/stylish-portfolio.min.css" rel="stylesheet">

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
            <a class="js-scroll-trigger" href="index.php">Home</a>
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


<!--Section: Blog v.4-->
<section class="content-section" id="portfolio">
    <div class="container">

        <!--Grid row-->
        <div class="row" id="book1">
            <div class="col-md-12">
                <!--Featured image-->
                <div class="card card-cascade wider reverse">
                    <div class="view overlay">
                        <img src="/img/book1.jpg" alt="Wide sample post image" class="img-fluid mx-auto d-block"height="100" width="200">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Post data-->
                    <div class="card-body text-center">
                        <h2>
                            <a class="font-weight-bold">THE DAIRY OF A YOUNG GIRL</a>
                        </h2>
                        <p>Written by
                            <a>ANNE FRANK </a>
                    </div>
                    <!--Post data-->
                </div>
                <!--Excerpt-->
                <div class="excerpt mt-5">
                    <p>On her thirteenth birthday, Anne Frank’s parents give her a diary. She’s excited because she wants someone—or something—in which to confide all of her secret thoughts. Even though she has a rich social life, she feels misunderstood by everyone she knows. Anne starts writing about daily events, her thoughts, school grades, boys, all that.
                        But, within a month, her entire life changes.
                    </p>
                </div>
            </div>
        </div>

        <!--Grid row-->
        <hr class="mb-5 mt-4">

        <!--Grid row-->
        <div class="row" id="book2">
            <div class="col-md-12">
                <!--Featured image-->
                <div class="card card-cascade wider reverse">
                    <div class="view overlay">
                        <img src="/img/book2.jpg" alt="Wide sample post image" class="img-fluid mx-auto d-block"height="100" width="200">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Post data-->
                    <div class="card-body text-center">
                        <h2>
                            <a class="font-weight-bold">TO KILL A MOCKINGBIRD</a>
                        </h2>
                        <p>Written by
                            <a>Harper Lee</a>

                    </div>
                    <!--Post data-->
                </div>

                <!--Excerpt-->
                <div class="excerpt mt-5">
                    <p>The place: Maycomb, Alabama, finalist for Most Boring Town in America. Few people move in, fewer move out, so it's just the same families doing the same things for generation after generation. Like the Finches: Scout, her brother Jem, and their father Atticus. Every summer Scout and Jem are joined by Dill Harris, who shares their obsession with the local haunted house, the Radley Place, and the boogeyman who lives there, Boo Radley.
                        Fall comes, Dill leaves, and Scout starts school. The Radley Place is in between Scout's house and school, so she has to go by it every day, usually at top speed. One day she notices something odd: a couple of pieces of gum stuck in a hole in the tree. She tells Jem about it, and soon they find other treasures hidden in the same place, including finely-carved soap figurines of Scout and Jem themselves. This lasts until the following fall, when they find that Mr. Nathan (Boo's brother) has filled in the knothole with cement.
                    </p>
                </div>
            </div>
        </div>


        <!--Grid row-->
        <div class="row" id="book3">
            <div class="col-md-12">
                <!--Featured image-->
                <div class="card card-cascade wider reverse">
                    <div class="view overlay">
                        <img src="/img/book3.jpg" alt="Wide sample post image" class="img-fluid mx-auto d-block"height="100" width="200">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Post data-->
                    <div class="card-body text-center">
                        <h2>
                            <a class="font-weight-bold">JANE EYRE</a>
                        </h2>
                        <p>Written by
                            <a>CHARLOTTE BRONTE </a>
                    </div>
                    <!--Post data-->
                </div>
                <!--Excerpt-->
                <div class="excerpt mt-5">
                    <p>This novel is a Bildungsroman (a coming-of-age story) written in the first person by the fictional Jane Eyre. It is also a “gothic” novel (set in a dark, exotic locale with mystery and romance mixed in equal portions). Jane is a strong-willed, ten-year-old orphan (her parents died of typhus) who lives with her uncle’s family. Other than the nursemaid, the family ostracizes Jane and treats her horribly; her cousin John constantly bullies her. She is then sent off to the austere Lowood Institution, a charity school, where she and the other girls are also horribly treated; “Lowood,” as the name makes plain, is the “low” point in Jane’s young life. But in the face of her mistreatment and constant adversity, Jane gathers strength and confidence. In early adulthood, after several years as a student and then teacher at Lowood, she then musters the courage to leave. She finds work as a governess at Thornfield Hall, where she meets her dashing and Byronic employer, the wealthy but impetuous Edward Rochester.
                    </p>
                </div>
            </div>
        </div>

        <div class="row" id="book4">
            <div class="col-md-12">
                <!--Featured image-->
                <div class="card card-cascade wider reverse">
                    <div class="view overlay">
                        <img src="/img/book4.jpg" alt="Wide sample post image" class="img-fluid mx-auto d-block"height="100" width="200">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Post data-->
                    <div class="card-body text-center">
                        <h2>
                            <a class="font-weight-bold">MOBY DICK</a>
                        </h2>
                        <p>Written by
                            <a>HERMAN MERVILLE</a>
                    </div>
                    <!--Post data-->
                </div>
                <!--Excerpt-->
                <div class="excerpt mt-5">
                    <p>ur intrepid narrator, a former schoolteacher famously "called" Ishmael—is that actually his name?— signs up as sailor on a whaling voyage to cure a bout of depression/being a misanthropic dirtbag. On his way to find a ship in Nantucket, he meets Queequeg, a heavily tattooed South Sea Island harpooneer just returned from his latest whaling trip. Ishmael and Queequeg become best buds and roommates almost immediately. Together, they sign up for a voyage on the Pequod, which is just about to start on a three-year expedition to hunt sperm whales.

                        On board the Pequod, Ishmael meets the mates—honest Starbuck, jolly Stubb, and fierce Flask—and the other harpooneers, Tashtego and Daggoo. The ship’s commander, Captain Ahab, remains secluded in his cabin and never shows himself to the crew. Uh, that's ominous. Oh well. The mates organize the beginning of the voyage as though there were no captain.
                    </p>
                </div>
            </div>
        </div>
        <hr class="mb-5 mt-4">
    </div>
</section>
<!--Section: Blog v.4-->


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
