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
    <link rel="stylesheet" href="custom2.css">
    <script src="assets/bootstrap1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</head>
<body>
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa-solid fa-user-doctor"></i>
                            Admin panel login</h3>
                    </div>
                    <div class="card-body">
                        <form action="admin_login_handler.php" method="post">
                            <div class="form-group">
                                <input name="uname" placeholder="username" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <input name="pass" placeholder="password" class="form-control" type="password" required>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="login" id="login" a>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>
</html>
