    <!--layout_header-->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBSITE BÁN HÀNG</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href=<?php echo $level . CSS . "bootstrap.min.css" ?>>

    <!-- Font Awesome -->
    <link rel="stylesheet" href=<?php echo $level . CSS . "font-awesome.min.css" ?>>

    <!-- Custom CSS -->
    <link rel="stylesheet" href=<?php echo $level . CSS . "owl.carousel.css" ?>>
    <link rel="stylesheet" href=<?php echo $level . CSS . "style.css" ?>>
    <link rel="stylesheet" href=<?php echo $level . CSS . "responsive.css" ?>>
    <link rel="stylesheet" type="text/css" href="<?php echo $level . CSS . "util.css" ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $level . CSS . "main.css" ?>">


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . FONT . "font-awesome-4.7.0/css/font-awesome.min.css" ?> ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . FONT . "Linearicons-Free-v1.0.0/icon-font.min.css" ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "animate/animate.css" ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "css-hamburgers/hamburgers.min.css" ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "animsition/css/animsition.min.css" ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "select2/select2.min.css" ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $level . VEN . "daterangepicker/daterangepicker.css" ?>">
    <!--MENU HEADER -->
    <?php
    session_start();
    $TaiKhoan = DP::run_query("SELECT * FROM taikhoan WHERE trangthai!=0", [], 2);
    $KiemTra_Admin = DP::run_query("SELECT * FROM taikhoan WHERE hoatdong = 1", [], 2);

    $loaitk = '';
    if (count($KiemTra_Admin) > 0)
        $loaitk = $KiemTra_Admin[0]['loaiTK'];
    if ($loaitk == 1)
        header('location:' . $level . 'Admin/index.php');
    ?>
    <style type="text/css">
        .link {
            text-decoration: none;
            text-align: center;
        }

        a.link:hover {
            background-color: black;
            color: white;
        }
    </style>
