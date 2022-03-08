<?php
  require_once "register_handler.php";
?>

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
    <link rel="stylesheet" href="custom1.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-header border-primary">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="#profile" class="nav-link active font-weight-bold" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#editProfile" class="nav-link font-weight-bold" data-toggle="tab">Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#change password" class="nav-link font-weight-bold" data-toggle="tab">Change Password</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane container active" id="profile">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <div class="card-header bg-dark text-center text-white">
                                        User ID : <?= $u1_id; ?>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #189AB4">
                                            <b>Full Name :</b> <?= $u1_fname; ?></p>
                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #189AB4">
                                            <b>Name :</b> <?= $u1_name; ?></p>
                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #189AB4">
                                            <b>Email :</b> <?= $u1_email; ?></p>
                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #189AB4">
                                            <b>Profession :</b> <?= $u1_profession; ?></p>
                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #189AB4">
                                            <b>Registered on :</b> <?= $created; ?></p>
                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #189AB4">
                                            <b>Email verified :</b> <?= $verified; ?>
                                            <?php
                                            if($verified == 'Not verified!'): ?>
                                                <a href="#" id="verify-email" class="float-right">Verify Now</a>
                                            <?php endif; ?>
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card border-secondary align-self-center">
                                    <?php 
                                    if(!$uphoto);
                                        ?>
                                    <img src="assets/images/head-g419e78bc4_640.png" alt="head" class="img-thumbnail img-fluid">
<!--                                    --><?php
//                                    else; ?>
<!--<!--                                    <img src="-->--><?////= 'assets/php/'.$uphoto; ?><!--<!--" class="img-thumbnail img-fluid"width="408px">-->-->
<!--                                    --><?php //endif; ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>