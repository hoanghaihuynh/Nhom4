<?php
$TongTien = 0;
$count = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $sp) {
        // Loại bỏ dấu phân cách nghìn và chuyển thành số thực
        $thanhtien = floatval(str_replace('.', '', $sp['thanhtien']));
        $TongTien += $thanhtien; // Cộng giá trị vào tổng
        $count++;
    }
}
