<?php
//if (!isset($_SESSION['nID'])) {
//    header("Location: login.php");
//    die();
//}
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="assets/bootstrap1/js/popper.min.js"></script>
    <script src="assets/bootstrap1/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap1/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body class="bod">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="">
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
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="Academia.php">Academia</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="mentorship.php">Mentorship</a></li>
                    <li><a class="dropdown-item active" href="research.php">Research</a></li>
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
<br>
<br>

     <video autoplay muted loop id="video">
         <source src="assets/images/Dna%20-%2027019.mp4" type="video/mp4">
     </video>
     <div class="row">
         <div class="col-lg-12">
             <h3 class="text-center font-weight-bolder">Research and innovation</h3>
         </div>
     </div>
     <div class="container l1">
         <div class="row t1">
             <div class="col">
                 <h3 class="text-center">Research</h3>
                 <p>Evolution is only through research.We provide a research programme which entails:a workshop for research skills,
                     a mentorship programme that caters for it and hands-on experience with fellow researchers. Research doesn't only
                     entail medical skills but also other courses such as IT and business.
                     </p>
                 <a href="#" role="button" class="btn btn-primary">Join</a>

             </div>
             <div class="col">
                 <h3 class="text-center font-weight-bold">Research categories</h3>
                 <ul>
                     <li><a class="text-dark lead" href="#">Palliative care</a></li>
                     <li><a class="text-dark lead" href="#">Preventive medicine</a></li>
                     <li><a class="text-dark lead" href="#">Oncology</a></li>
                     <li><a class="text-dark lead" href="#">Tropical diseases</a></li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="container l1">
         <div class="row t1">
             <div class="col-lg-4">
                 <h3>News</h3>
                 <ul>
                     <li>
                         <a class="text-dark" href="https://www.sowetanlive.co.za/news/south-africa/2022-03-08-research-shows-degrees-may-have-little-effect-on-economic-performance/">
                             Research on the relationship between degrees and the economy
                         </a>
                     </li>
                     <li>
                         <a class="text-dark" href="https://www.globaltimes.cn/page/202203/1254284.shtml">
                             Top Chinese scientists prompt openness and priority on fundamental research
                         </a>
                     </li>
                     <li>
                         <a class="text-dark" href="https://www.globaltimes.cn/page/202203/1254284.shtml">
                             Cancer studies have drastically fallen since the onset of covid
                         </a>
                     </li>
                 </ul>
             </div>
             <div class="col-lg-8">
                 <h3 class="text-center">Latest News</h3>
                 <div class="row">
                     <div class="col-lg-6 tol">
                         <div class="new">
                             <div class="thumb">
                                 <a href="#">
                                     <img src="assets/images/img.png" alt="kemri" width="300">
                                 </a>
                             </div>
                             <div class="down-content">
                                 <div class="date">
                                     <h6>March <span>14</span></h6>
                                 </div>
                                 <a href="https://standardmedia.co.ke/health/index.php/health-science/article/2001439528/smile-train-kemri-to-research-on-cleft">
                                     Cleft palate research
                                 </a>
                                 <p>Smile has offered its services in training KEMRI in the research on cleft palate</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="container l1">
         <div class="row t1">
             <div class="col-lg-6">
                 <h3 class="text-center">Publications</h3>
                 <p>We have helped medics in publishing their research in well known research journals such as Medical Research Commission.</p>
             </div>
             <div class="col-lg-6">
                 <h3 class="text-center">Publication sites</h3>
                 <ul>
                     <li>
                         <a class="text-body lead" href="https://www.nejm.org/">
                             New England Journal of medicine
                         </a>
                     </li>
                     <li>
                         <a class="text-body lead" href="https://www.omicsonline.org/evidence-based-medicine-practice.php">
                             Evidence based medicine and practice
                         </a>
                     </li>
                     <li>
                         <a class="text-body lead" href="https://www.omicsonline.org/palliative-care-medicine.php">
                             Journal on palliative care
                         </a>
                     </li>
                     <li>
                         <a class="text-body lead" href="https://www.scitechnol.com/regenerative-medicine.php">
                             Journal of regenerative medicine
                         </a>
                     </li>
                     <li>
                         <a class="text-body lead" href="https://www.scitechnol.com/journal-of-blood-research-and-hematologic-diseases.php">
                             Journal of blood research and hematological diseases
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
</body>
</html>