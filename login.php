<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
    <script src="assets/bootstrap1/js/popper.min.js"></script>
    <script src="assets/bootstrap1/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap1/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">

</head>
<body class="blot">
         <form class="sot" action="login_handle.php" method="post">
             <h1 class="font-weight-bold text-center">Login Here</h1>
             <label class="text-black font-weight-bold" for="">Email</label><br>
             <input placeholder="Enter email" name="u1_email" type="email" required><br>
             <label class="text-black font-weight-bold" for="">Password</label><br>
             <input placeholder="Enter Password" name="u1_pass" type="password" required><br><br>
             <div class="form-check">
                 <label class="form-check-label">
                     <input class="form-check-input" type="checkbox">Remember me
                 </label><br>
             </div>
             <h3 class="text-center font-weight-bolder">Or</h3>
             <div class="social">
                 <a class="social1 facebook" href="#"><i class="fa-brands fa-facebook fa-lg"></i>Facebook</a>
                 <a class="social1 twitter" href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
                 <a class="social1 linkedin" href="#"><i class="fa-brands fa-linkedin"></i>LinkedIn</a>
                 <a class="social1 google" href="#"><i class="fa-brands fa-google"></i>Google</a>
             </div>
             <br>
             <input class="btn btn-primary put" name="log" value="Login" type="submit">
             <p class="font-weight-bold">Don't have an account?<a href="register.php">Register here</a></p>
         </form>
</body>
</html>
