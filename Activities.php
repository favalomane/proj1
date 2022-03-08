<?php
if (!isset($_SESSION['nID'])) {
    header("Location: login.php");
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Additional CSS Files -->
    <script src="assets/bootstrap1/js/popper.min.js"></script>
    <script src="assets/bootstrap1/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="custom1.css">
</head>
<body class="body">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="home.php">
        <i class="fa-light fa-heart-pulse"></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dab">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="dab">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-uppercase active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" href="Academia.php">Academia</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="mentorship.php">Mentorship</a></li>
                    <li><a class="dropdown-item" href="research.php">Research</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Activities.php">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
        </ul>
    </div>
</nav>

<section class="upcoming-events" id="events">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="text-center">Upcoming events</h2>
                    <hr style="width: 50%;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="events">
                    <h4>Events Categories</h4>
                    <ul>
                        <li><a href="#">Art</a></li>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Community volunteer work</a></li>
                    </ul>
                    <div>
                        <a href="#" class="btn btn-info">All Upcoming Events</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 tol">
                        <div class="event-item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/monster-g52bc887bd_640.png" alt="Music" width="300">
                                </a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>March <span>14</span></h6>
                                </div>
                                <a href="#"><h4>Music competition</h4></a>
                                    <p>Music is the<br>food of our soul.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/mandala-g460246d07_640.png" alt="Art" width="350">
                                </a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>March <span>16</span></h6>
                                </div>
                                <a href="#"><h4>Art competition</h4></a>
                                <p>Artist get your engines ready for a once in a lifetime opportunity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/artificial-intelligence-g58f68bc8d_640.jpg" alt="Science"width="350"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>March <span>20</span></h6>
                                </div>
                                <a href="#"><h4>Science symposium</h4></a>
                                <p>Enlighten the world through science with new innovations brought forth everyday.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/images/chemist-gb7abe61d4_640.jpg" alt="Student Training" width="320"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>March <span>27-30</span></h6>
                                </div>
                                <a href="#"><h4>Student Training</h4></a>
                                <p>Learn research skills and participate in a research workshop that provides hands-on experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
