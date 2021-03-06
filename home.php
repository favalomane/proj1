<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="assets/bootstrap1/js/popper.min.js"></script>
    <script src="assets/bootstrap1/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap1/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <script src="assets/bootstrap1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</head>
<body>
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
         <a class="navbar-brand logo" href="home.php">
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
     <div class="carousel slide dak" data-ride="carousel" id="dak">
         <ul class="carousel-indicators">
             <li data-target="#dak" data-slide-to="0" class="active"></li>
             <li data-target="#dak" data-slide-to="1"></li>
             <li data-target="#dak" data-slide-to="2"></li>
         </ul>
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="assets/images/human-skeleton-g773d9e295_1280.jpg" alt="Human Skeleton" width="1830" height="500">
                 <div class="carousel-caption">
                     <p class="font-weight-bolder">"Health is a state of complete physical,mental and social well-being, and not merely the absence of disease or infirmity "</p>
                     <h3>WHO</h3>
                 </div>
             </div>
             <div class="carousel-item">
                 <img src="assets/images/doctor-gccf3a0115_1280.jpg" alt="Doctor" width="1830" height="500">
                 <div class="carousel-caption">
                     <p class="font-weight-bolder">"Wherever the Art of Medicine is loved,there is also a love of Humanity"</p>
                     <h3>Hippocrates</h3>
                 </div>
             </div>
             <div class="carousel-item">
                 <img src="assets/images/sense-gb6248d69d_1280.jpg" alt="Sense" width="1830" height="500">
                 <div class="carousel-caption">
                     <p class="text-primary font-weight-bolder">"The physician must be able to know the antecedent,the present and the future...to do no harm"</p>
                     <h3>Hippocrates</h3>
                 </div>
             </div>
         </div>
         <a class="carousel-control-prev" href="#dak" data-slide="prev">
             <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#dak" data-slide="next">
             <span class="carousel-control-next-icon"></span>
         </a>
     </div>
     <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-4">
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="service-item text-center pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                             <h5 class="mb-3">Skilled Mentors</h5>
                             <p>We have skilled mentors who are certified doctors and higher leveled medics.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="service-item text-center pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                             <h5 class="mb-3">Online Classes</h5>
                             <p>For convenience,we offer online mentor classes.In the event of one on one classes,they are also available.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="service-item text-center pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-home text-primary mb-4"></i>
                             <h5 class="mb-3">Research Projects</h5>
                             <p>Get involved in research projects speared headed by peers and facilitated by certified researchers.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="service-item text-center pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                             <h5 class="mb-3">Publication Library</h5>
                             <p>All publications are available in our library and they are still being updated everyday.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</body>
</html>
