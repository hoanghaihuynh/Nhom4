<!--TOP BÁN CHẠY-->
<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h3 class="product-wid-title">Sản Phẩm Bán Chạy</h3>
                    <?php
                    foreach ($topSeller as $key) {
                    ?>
                        <div class="single-wid-product">
                            <a href="<?php echo $level . PAGE . 'single-product.php?id=' . $key['masp'] ?>"><img src=<?php echo $level . IMG . $key['anhdaidien']; ?> alt="" class="product-thumb"></a>
                            <h2><a href="<?php echo $level . PAGE . 'single-product.php?id=' . $key['masp'] ?>"><?php echo $key['tensp']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $key['giamoi'] . " vnđ"; ?></ins><del><?php echo $key['giacu'] . " vnđ"; ?></del>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <!-- END TOP BÁN CHẠY -->
            <!--XEM GẦN ĐÂY-->
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h3 class="product-wid-title">Sản Phẩm Mới</h3>
                    <?php
                    foreach ($moixem as $key) {
                    ?>
                        <div class="single-wid-product">
                            <a href="<?php echo $level . PAGE . 'single-product.php?id=' . $key['masp'] ?>"><img src=<?php echo $level . IMG . $key['anhdaidien']; ?> alt="" class="product-thumb"></a>
                            <h2><a href="<?php echo $level . PAGE . 'single-product.php?id=' . $key['masp'] ?>"><?php echo $key['tensp']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $key['giamoi'] . " vnđ"; ?></ins><del><?php echo $key['giacu'] . " vnđ"; ?></del>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <!-- END XEM GẦN ĐÂY -->
            <!--TOP KHUYẾN MÃI-->
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h3 class="product-wid-title">Sản Phẩm Khuyến Mãi</h3>
                    <?php
                    foreach ($topSale as $key) {
                    ?>
                        <div class="single-wid-product">
                            <a href="<?php echo $level . PAGE . 'single-product.php?id=' . $key['masp'] ?>"><img src=<?php echo $level . IMG . $key['anhdaidien']; ?> alt="" class="product-thumb"></a>
                            <h2><a href="<?php echo $level . PAGE . 'single-product.php?id=' . $key['masp'] ?>"><?php echo $key['tensp']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $key['giamoi'] . " vnđ"; ?></ins><del><?php echo $key['giacu'] . " vnđ"; ?></del>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div> <!-- End TOP KHUYẾN MÃI -->