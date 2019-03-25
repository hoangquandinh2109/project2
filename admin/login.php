<?php
include '../php_check_acc/connect_sever.php';

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Login</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>
    <div id="alert-fail" style="z-index: 100; padding-top: 100px;color:red;font-size: 28px;border:1px; display: none;">thất bại</div>
    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6"><img src="../img/Logo.png" style="width: 550px; height: 350px;"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form class="user" method="post" onsubmit="return check_login()" action="../php_check_acc/check_admin.php">
                                            <div class="form-group">
                                                <input type="text" name="acc-admin" id="acc-admin" class="form-control form-control-user"  aria-describedby="emailHelp" placeholder="Enter Account..." autofocus="">
                                                <span id="acc-admin-erro" style="color: red;padding-left: 30px;"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="pass-admin" id="pass-admin" class="form-control form-control-user"  placeholder="Enter Password">
                                                <span id="pass-admin-erro" style="color: red;padding-left: 30px;"></span>
                                            </div>
                                            
                                            <input type="submit" name="submit_log_admin" value="Login" class="btn btn-primary btn-user btn-block">
                                           <script language="javascript" src="js_tien/check_acc_admin.js"></script>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

</html>
