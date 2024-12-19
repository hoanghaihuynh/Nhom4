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
<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="user-menu">
                        <ul>
                            <!-- username -->
                            <li>
                                <?php 
                                 if (isset($_SESSION['google_id']) && isset($_SESSION['name'])) {
                                    echo htmlspecialchars($_SESSION['name']);
                                } else{
                                    $flag = 0; $str = "Log In"; $link = $level.'login.php';
                                    foreach($TaiKhoan as $acc)
                                    {
                                        if($acc['hoatdong'] != '0'){
                                        ?>
                                <a href="<?php echo $level.PAGE.'account.php?user='.$acc['username']?>" style='text-decoration: none'>
                                <i class="fa fa-user"></i> 
                                <?php
                                        
                                            if(!empty($acc['username']))
                                            {
                                                echo $acc['fullname']; 
                                                $flag = 1; $str = 'Log Out'; $link = $level.CONT.'logout.php';
                                                break;
                                            }
                                        }
                                    }
                                    if($flag == 0)
                                    {
                                        echo "My Account";
                                    }
                                }     
                                 ?>
                            </a></li>
                           

                            <!-- Đăng xuất/ đăng nhập -->
                            <li>
                                <a href='<?php echo (isset($_SESSION['google_id']) ? $level.CONT.'logout.php' : $link); ?>' style='text-decoration: none'>
                                    <i class="fa fa-user"></i> <?php echo isset($_SESSION['google_id']) ? 'Log Out' : $str; ?>
                                </a>
                            </li>
                            <!-- Thông báo đăng nhập -->
                            <div class="modal fade" id="message_mail">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                          
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <center>
                                                <a href="<?php  echo $level.'login.php'; ?>" class='link'>Log in now</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
                

                    <div class="col-md-6" >
                    <form action="<?php echo $level.PAGE.'search.php' ?>" method="get">

                        <!-- textbox -->
                        <div class='col-md-9'>
                            <input type="search" name="search" class="form-control" placeholder="Search">
                            <input type="search" name="flag" hidden="true" value="0"><!-- 0 là tìm theo 1 điều kiện -->
                        </div>

                        <!-- button tìm -->
                        <div class='col-md-1'>
                            <button type="submit" class='form-control'> 
                                <span class="fa fa-search" aria-hidden="true"></span>
                            </button>
                        </div>
                        </form>
                    <!-- button tìm kiếm theo tên, giá -->
                    <div class='col-md-2'>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#timkiem">Tìm Kiếm Theo Điều Kiện</button>
                        
                            <div class="modal fade" id="timkiem">
                                <div class="modal-dialog modal-sm">
                                    <form action='<?php echo $level.PAGE.'search.php' ?>' method='GET'>
                                        <div class="modal-content">
                                        <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title" style="text-align: center;"><b>Tìm Kiếm Sản Phẩm</b></h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-sm-6'>
                                                            <label for='username' style="float:left">Tên Sản Phẩm: </label>
                                                        </div>
                                                        <div class='col-sm-6'>
                                                            <!-- select nó sẽ lấy dữ liệu từ VALUE của option -->
                                                          <input type="text" name="tensanpham" class='form-control'>

                                                        </div>
                                                        <input type="search" name="flag" hidden="true" value="1"><!-- 1 là tìm theo nhiều điều kiện -->
                                                        <div class='col-sm-6'>
                                                            <label for='username' style="float:left">Giá: </label>
                                                        </div>
                                                         <div class='col-sm-6'>
                                                           <input type="text" name="giaban" class='form-control'>
                                                        </div>
                                                        <div class='col-sm-6'>
                                                            <label for='brand' style="float:left">Thương Hiệu: </label>
                                                        </div>
                                                        <div class='col-sm-6'>
                                                            <select name="hangsp" class='form-control'>
                                                                <option value="">Chọn...</option>
                                                                <option value="Dell">Dell</option>
                                                                <option value="HP">HP</option>
                                                                <option value="Asus">Asus</option>
                                                                <option value="Acer">Acer</option>
                                                                <option value="Apple">Apple</option>
                                                                <option value="MSI">MSI</option>
                                                                <option value="GIGABYTE">GIGABYTE</option>
                                                            </select>
                                                        </div>
                                                        <!-- chip -->
                                                        <div class='col-sm-6'>
                                                            <label for='brand' style="float:left">Dòng Chip: </label>
                                                        </div>
                                                        <div class='col-sm-6'>
                                                            <select name="chip" class='form-control'>
                                                                <option value="">Chọn...</option>
                                                                <option value="AMD Ryzen 9">AMD Ryzen 9</option>
                                                                <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                                                                <option value="Intel Core i7">Intel Core i7</option>
                                                                <option value="Intel Core i5">Intel Core i5</option>
                                                                <option value="Apple M2">Apple M2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type='submit' class='btn btn-warning'>Lọc</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->