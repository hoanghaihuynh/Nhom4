<!-- menu -->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $level . 'index.php'; ?>">Home</a></li>
                    <li><a href="<?php echo $level . PAGE . 'shop.php'; ?>">Sản Phẩm</a></li>
                    <li><a href="<?php echo $level . PAGE . 'cart.php'; ?>">Giỏ Hàng</a></li>
                    <li><a href="<?php echo $level . PAGE . 'order.php'; ?>">Đơn Đặt Hàng</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

<!-- tiêu đề -->
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End tiêu đề  -->
<!-- tìm kiếm  -->

<!-- Trang chi single-product-area ở đây -->

    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Tìm Kiếm Sản Phẩm</h2>
                    <form action="<?php echo $level . PAGE . 'search.php' ?>" method='get'>
                        <input type="text" name="search" placeholder="Tìm kiếm sản phẩm...">
                        <input type="search" name="flag" hidden="true" value="0"><!-- 0 là tìm theo 1 điều kiện -->
                        <input type="submit" value="Search">
                    </form>
                </div>
                <!-- ds sản phẩm  -->
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Sản Phẩm</h2>
                    <?php
                    foreach ($SanPham as $key) {
                    ?>
                        <div class="thubmnail-recent">
                            <img src="<?php echo $level . IMG . $key['anhdaidien']; ?>" class="recent-thumb" alt="">
                            <h2><a href=<?php echo $level . PAGE . "single-product.php?id=" . $key['masp']; ?>><?php echo $key['tensp']; ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo $key['giamoi']; ?> vnđ</ins> <del><?php echo $key['giacu']; ?>vnđ </del>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <!-- end ds sản phẩm -->

                <!-- bài viết gần đây -->
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Bài Viết Gần Đây</h2>
                    <ul>
                        <?php
                        foreach ($BaiVietGanDay as $key) {
                        ?>
                            <li><a href=<?php echo $level . PAGE . 'single-product.php?id=' . $key['idbaiviet']; ?>><?php echo $key['tieude']; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- end  -->