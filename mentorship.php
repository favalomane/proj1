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
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/bootstrap1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="custom1.css" rel="stylesheet">
</head>
<body>
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
                <a class="nav-link text-uppercase" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" href="Academia.php">Academia</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item active" href="mentorship.php">Mentorship</a></li>
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
                <a class="nav-link" href="login.php">SignUp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-xxl py-5">
    <h3 class="text-capitalize text-center"> Mentorship Programme</h3>
    <hr style="width: 30%;">
    <hr style="width: 50%">
    <hr style="width: 80%;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="assets/images/artificial-intelligence-g58f68bc8d_640.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Welcome to Mentorship</h1>
                <p class="mb-4">We offer a mentorship programme for all those who want assistance in their course units as well as reading
                    materials,links to pathoma websites and usmle papers.We offer discussion groups with mentors leading and also one on one
                    meeting times with mentors.Mentors are not oly other students but also certified doctors.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled mentors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Discussion groups</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Workshops</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>One on one meetings</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>USMLE and pathoma links</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Categories Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Courses Categories</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="assets/images/chemist-gb7abe61d4_640.jpg" alt="">
                            <div class="bg-white text-center position-relative top-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Biochemistry</h5>
                                <small class="text-primary">Learn the intrinsic nature of the body.</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="assets/images/doctor-g9428f6825_1920.jpg" alt="">
                            <div class="bg-white text-center position-relative bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Physiology</h5>
                                <p>Join us in the journey through all systems. </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="assets/images/human-skeleton-g773d9e295_1280.jpg" alt="">
                            <div class="bg-white text-center position-relative bottom-0  py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Anatomy</h5>
                                <p>Join live interactive anatomy classes at the convenience of your home. </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="assets/images/anatomical-g0a06b15ea_1920.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Research</h5>
                        <p>Research workshops,mentors and teams led by doctors</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Categories Start -->
<!-- Testimonial Start -->
 <div class="container tony">
     <div class="row">
         <div class="col-12">
             <h1 class="text-center">Testimonials</h1>
             <hr style="width: 50%;height: 1px;color: gray;">
             <p class="text-white text-center">What our users are saying</p>
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <div id="testimony" class="carousel slide testimony" data-ride="carousel">
<!--                 indicators/-->
                 <ul  class="carousel-indicators">
                     <li data-target="#testimony" data-slide-to="0" class="active"></li>
                     <li data-target="#testimony" data-slide-to="1"></li>
                     <li data-target="#testimony" data-slide-to="2"></li>
                 </ul>
<!--                 indicators/-->
                 <!-- Wrapper for slides -->
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <div class="row p-4">
                             <div class="card">
                                 <i class="fa fa-quote-left" aria-hidden="true"></i>
                                 <p class="lh-lg">Very informative</p>
                                 <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                             </div>
                             <div class="row">
                                 <div class="col-sm-2 pt-3">
                                     <img src="assets/images/college-student-g0d8f8a549_640.jpg" class="rounded-circle img-responsive img-fluid">
                                 </div>
                                 <div class="col-sm-10">
                                     <div class="arrow-down d-none d-lg-block"></div>
                                     <h4><strong>Samuel Collin</strong></h4>
                                     <p class="testimonial_subtitle"><span>Level 4 medic</span><br>
                                         <span>UON</span>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="row p-4">
                             <div class="card">
                                 <i class="fa fa-quote-left" aria-hidden="true"></i>
                                 <p class="lh-lg">Great opportunities and enjoyable </p>
                                 <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                             </div>
                             <div class="row">
                                 <div class="col-sm-2 pt-4">
                                     <img src="assets/images/student-g731a34163_640.jpg" class="rounded-circle img-responsive img-fluid">
                                 </div>
                                 <div class="col-sm-10">
                                     <div class="arrow-down d-none d-lg-block"></div>
                                     <h4><strong>Andrenica Valcos</strong></h4>
                                     <p class="testimonial_subtitle">
                                         <span>Oncologist</span><br>
                                         <span>Hopkins</span>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="row p-4">
                             <div class="t-card">
                                 <i class="fa fa-quote-left" aria-hidden="true"></i>
                                 <p class="lh-lg">Review goes here...</p>
                                 <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                             </div>
                             <div class="row text-lg-start">
                                 <div class="col-sm-2 pt-4 align-items-center">
                                     <img src="assets/images/young-woman-g195517880_640.jpg" class="rounded-circle img-responsive img-fluid">
                                 </div>
                                 <div class="col-sm-10">
                                     <div class="arrow-down d-none d-md-block"></div>
                                     <h4><strong>Patrick muriungi</strong></h4>
                                     <p class="testimonial_subtitle"><span>Web Technologist</span><br>
                                         <span>Vaxa digital</span>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
<!--             controls-->
             <a class="carousel-control-prev" href="#testimony" data-slide="prev">
                 <span class="carousel-control-prev-icon"></span>
             </a>
             <a class="carousel-control-next" href="#testimony" data-slide="next">
                 <span class="carousel-control-next-icon"></span>
         </div>
     </div>
 </div>

<!-- Testimonial End -->

</body>
</html>
