<?php
session_start();
include("config.php");
include("DB.php");

$level = Trang0;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo $level . IMG . "icons/favicon.ico" ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "bootstrap/css/bootstrap.min.css" ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . FONT . "font-awesome-4.7.0/css/font-awesome.min.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . FONT . "Linearicons-Free-v1.0.0/icon-font.min.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "animate/animate.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "css-hamburgers/hamburgers.min.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "animsition/css/animsition.min.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "select2/select2.min.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "daterangepicker/daterangepicker.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . CSS . "util.css" ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo $level . CSS . "main.css" ?> ">

    </body>

    <!--===============================================================================================-->
</head>

<body>
<div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo $level . IMG . "bg-01.jpg"?>');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" action='<?php echo $level . CONT . 'dangnhap.php'; ?>' method="POST">
                    <span class="login100-form-title p-b-53">Sign In With</span>
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">Username</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username" id="username" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9" data-toggle="modal">
                        <span class="txt1">Password</span>
                        <!-- <a href="forgot.php" class="txt2 bo1 m-l-5">Quên mật khẩu?</a> -->
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div>
                    <br>
                        <i style="color:red">
                            <?php
                                if (isset($_GET['status'])) {
                                    $status = $_GET['status']; // Hiển thị trạng thái đăng nhập, đăng kí
                                    if ($status == 'error') {
                                        echo "Tên Đăng Nhập hoặc Mật Khẩu không chính xác!";
                                    } elseif ($status == 'new_user') {
                                        echo "Tài khoản mới đã được tạo! Vui lòng đăng nhập.";
                                    }
                                }
                            ?>
                        </i>
                        <!-- <i style="color:red">
                            <?php
                                if (isset($_GET['status'])) {
                                    $status = $_GET['status']; // Hiển thị trạng thái đăng nhập, đăng kí
                                    if ($status == 'error') {
                                        echo "Tên Đăng Nhập hoặc Mật Khẩu không chính xác!";
                                    } elseif ($status == 'new_user') {
                                        echo "Tài khoản mới đã được tạo! Vui lòng đăng nhập.";
                                    }
                                }
                            ?>
                        </i> -->
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn" name="signin">Sign In</button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <span class="txt2">Not a member?</span>
                        <a href="<?php echo $level . "signup.php" ?>" class="txt2 bo1">Sign up now</a>
                    </div>
                    
                </form>
                
            </div>
            
        </div>
        
    </div>

<!--===============================================================================================-->
<script src="<?php echo $level . VEN . "jquery/jquery-3.2.1.min.js"?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo $level . VEN . "animsition/js/animsition.min.js"?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo $level . VEN . "bootstrap/js/popper.js"?>"></script>
    <script src="<?php echo $level . VEN . "bootstrap/js/bootstrap.min.js"?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo $level . VEN . "select2/select2.min.js"?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo $level . VEN . "daterangepicker/moment.min.js"?>"></script>
    <script src="<?php echo $level . VEN . "daterangepicker/daterangepicker.js"?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo $level . VEN . "countdowntime/countdowntime.js"?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo $level . JS . "main.js"?>"></script>
</body>

</html>