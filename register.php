<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="assets/bootstrap1/js/popper.min.js"></script>
    <script src="assets/bootstrap1/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap1/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</head>
<body class="rot">
     <form class="needs-validation tot" action="register_handler.php" method="post" novalidate>
         <h3 class="text-center">Register</h3>
         <div>
             <input class="tlot" placeholder="Full Name" name="u1_fname" type="text" required>
             <div class="valid-feedback">Valid</div>
             <div class="invalid-feedback">Please fill out this field</div>
         </div>
         <br>
         <div>
             <input placeholder="Username" class="tlot" name="u1_name" type="text" required>
             <div class="valid-feedback">Valid</div>
             <div class="invalid-feedback">Please fill out this field</div>
         </div>
         <br>
         <div>
             <select class="tlot" name="u1_profession" id="" required>
                 <option class="text-black-50" value="Select profession">Select profession</option>
                 <option value="doctor">Doctor</option>
                 <option value="dentist">Dentist</option>
                 <option value="pharmacist">Pharmacist</option>
                 <option value="medical student">Medical student</option>
                 <option value="other">Other</option>
             </select>
             <div class="valid-feedback">Valid</div>
             <div class="invalid-feedback">Please fill out this field</div>
         </div>
         <br>
         <div>
             <input class="tlot" placeholder="Specify if other" name="u1_profession" type="text" required>
             <div class="valid-feedback">Valid</div>
             <div class="invalid-feedback">Please fill out this field</div>
         </div>
         <br>
         <div>
             <input class="tlot" placeholder="Email" name="u1_email" type="email" required>
             <div class="valid-feedback">Valid</div>
             <div class="invalid-feedback">Please fill out this field</div>
         </div>
         <br>
         <div>
              <input class="tlot" placeholder="Password" name="u1_pass" type="password" required>
             <div class="valid-feedback">Valid</div>
             <div class="invalid-feedback">Please fill out this field</div>
         </div>
         <br>
         <div>
             <input class="tlot" placeholder="Confirm Password" name="u1_pass" type="password" required>
             <div class="valid-feedback">Valid</div>
             <div class="invalid-feedback">Please fill out this field</div
         <br>
         <input class="btn btn-outline-primary" name="add" value="Register" type="submit">
         <p class="font-weight-bold">Already have an account?<a href="login.php">Login here</a></p>
     </form>
     <script>
     (function() {
        'use strict';
     window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                 if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                 }
            form.classList.add('was-validated');
            }, false);
        });
     }, false);
     })();
     </script>


</body>
</html>
<i