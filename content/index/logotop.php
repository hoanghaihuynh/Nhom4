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
?>
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo">
                    <h1><a href=" <?php echo $level."index.php"?>"><img src='<?php echo $level.IMG."NDB.png";?>'></a></h1>
                </div>
            </div>

            <div class='col-sm-8'>
                <div class="shopping-item">
                    <a href="<?php echo $level.PAGE.'cart.php';?>" style='font-size: 22px'>Giỏ Hàng : <span class="cart-amunt"><?php echo number_format($TongTien, 0, ',', '.')." vnđ"; ?></span><i class="fa fa-shopping-cart"></i><span class="product-count"><?php echo $count; ?></span></a>
                </div>
            </div>
        </div>  
    </div>
</div>

