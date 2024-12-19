<?php 
    include('../config.php');
    $level = Trang1;
    include($level . 'DB.php');

    // Lấy thông tin từ request
    $user = $_GET['name'];
    $email = $_GET['email'];
    $content = $_GET['content'];
    $idsanpham = $_GET['idsanpham'];
    $date = $_GET['ngaydang'];
    $giodang = $_GET['giodang'];


    // Thêm bình luận vào bảng binhluan
    $result = DP::run_query(
        "INSERT INTO binhluan(masp, name, email, noidung, ngaydang, giodang, trangthai) VALUES (?, ?, ?, ?, ?, ?, ?)",
        [$idsanpham, $user, $email, $content, $date, $giodang, "wait"],
        3
    );

    // Chuyển hướng về trang sản phẩm
    header('location:' . $level . PAGE . 'single-product.php?id=' . $idsanpham);
?>
