<?php
include('../config.php');
$level = '../'; // Đường dẫn đến thư mục chứa DB.php
include($level . 'DB.php');

// Kiểm tra nếu dữ liệu được gửi qua phương thức POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form đăng nhập, sử dụng phương thức POST
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Kiểm tra nếu username hoặc password trống
    if (empty($username) || empty($password)) {
        header('location:' . $level . 'login.php?status=error');
        exit();
    }

    // Cập nhật trạng thái hoạt động của tài khoản
    $update_hoatdong = DP::run_query("UPDATE taikhoan SET hoatdong = 1 WHERE username = ?", [$username], 1);

    // Truy vấn kiểm tra tài khoản
    $result = DP::run_query(
        "SELECT username, password, loaiTK FROM taikhoan WHERE username = ? AND password = ?",
        [$username, $password],
        2
    );

    if ($result !== false && !empty($result)) {
        // Đăng nhập thành công, kiểm tra loại tài khoản
        if ($result[0]['loaiTK'] == 2) {
            header('location:' . $level . 'index.php');
        } elseif ($result[0]['loaiTK'] == 1) {
            header('location:' . $level . 'Admin/index.php');//chuyển hướng qua trang quản lý
        }
        exit();
    } else {
        // Đăng nhập thất bại
        header('location:' . $level . 'login.php?status=error');
        exit();
    }
} else {
    // Nếu không phải phương thức POST, chuyển hướng lại trang đăng nhập
    header('location:' . $level . 'login.php');
    exit();
}
?>
