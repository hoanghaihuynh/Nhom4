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
                        <li class="active"><a href="<?php echo $level . PAGE . 'cart.php'; ?>">Giỏ Hàng</a></li>
                        <li><a href="<?php echo $level . PAGE . 'order.php'; ?>">Đơn Đặt Hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->

    <!-- giỏ  -->

    <!--Product -->

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm Kiếm Sản Phẩm</h2>
                        <form action="<?php echo $level . PAGE . 'search.php' ?>" method='get'>
                            <input type="text" name="search" placeholder="Tìm Kiếm Sản Phẩm...">
                            <input type="search" name="flag" hidden="true" value="0"><!-- 0 là tìm theo 1 điều kiện -->
                            <input type="submit" value="Search">
                        </form>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản Phẩm</h2>
                        <?php
                        foreach ($Product as $post) {
                        ?>
                            <div class="thubmnail-recent">
                                <img src=<?php echo $level . IMG . $post['anhdaidien']; ?> class="recent-thumb" alt="">
                                <h2><a href=<?php echo $level . PAGE . "single-product.php?id=" . $post['masp']; ?>><?php echo $post['tensp']; ?></a></h2>
                                <div class="product-sidebar-price">
                                    <ins><?php echo $post['giamoi']; ?></ins> <del><?php echo $post['giacu']; ?></del>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>

                <!-- xem giỏ hàng  -->

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">Hình Ảnh</th>
                                        <th class="product-name">Tên Sản Phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số Lượng</th>
                                        <th class="product-price">Tổng Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action='<?php echo $level . CONT_CART . 'cart_action.php'; ?>' method="get">
                                        <?php
                                        $check = false;
                                        $TongTien = 0;

                                        if (isset($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $k) {
                                                if (isset($k)) {
                                                    $check = true;
                                                }
                                            }
                                        }

                                        //hiển thị giỏ hàng
                                        if ($check == true) {
                                            foreach ($_SESSION['cart'] as $post) {
                                                $kho = DP::run_query("SELECT * FROM kho WHERE masp=?", [$post['masp']], 2);
                                                $max = $kho[0]['soluong_ton'];
                                        ?>
                                                <tr class="cart_item">
                                                    <!-- dấu hủy -->
                                                    <td class="product-remove">
                                                        <a title="Remove this item" class="remove" href='<?php echo $level . CONT_CART . 'cart_remove.php?id=' . $post['masp']; ?>'>×</a>
                                                    </td>

                                                    <!-- hình ảnh -->
                                                    <td class="product-thumbnail">
                                                        <a href=><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src=<?php echo $level . IMG . $post['anhdaidien']; ?>></a>
                                                    </td>

                                                    <!--  tên sản phẩm -->
                                                    <td class="product-name">
                                                        <a href=><?php echo $post['tensp']; ?></a>
                                                    </td>

                                                    <!-- giá bán -->
                                                    <td class="product-subtotal">
                                                        <span class="amount"><?php echo $post['giamoi']; ?></span>
                                                    </td>

                                                    <!-- số lượng -->
                                                    <td class="product-quantity">
                                                        <div class="quantity buttons_added">
                                                            <input type="number" name='<?php echo $post['masp']; ?>' size="4" class="input-text qty text" value="<?php echo $post['soluong']; ?>" min="1" max='<?php echo $max; ?>' step="1">
                                                        </div>
                                                    </td>

                                                    <!-- <td class="product-quantity">
                                                        <div class="quantity buttons_added">
                                                            <input type="number" name='<?php echo $post['masp']; ?>' size="4" class="input-text qty text" value="<?php echo $post['soluong']; ?>" min="1" max='<?php echo $max; ?>' step="1">
                                                        </div>
                                                    </td> -->

                                                    <!-- thành tiền -->
                                                    <td class="product-subtotal">
                                                        <span class="amount">
                                                            <?php
                                                            $thanhtien = floatval(str_replace('.', '', $post['thanhtien']));
                                                            echo number_format($thanhtien, 0, ',', '.');
                                                            ?>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php
                                                $TongTien += $thanhtien;
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="4">
                                                    <button type='submit' class='btn btn-primary' name='ThemSP'>Thêm Sản Phẩm</button>

                                                    <button type='submit' class='btn btn-primary' name='CapNhat'>Cập Nhật</button>
                                                </td>

                                                <td class="product-name" style='background-color: orange'>
                                                    <b>Tổng Tiền</b>
                                                </td>

                                                <td class="product-subtotal" style='background-color:gray'>
                                                    <b><span style='font-size: 22px; color:white'><?php echo number_format($TongTien, 0, ',', '.'); ?></span></b>
                                                </td>
                                            </tr>
                                    </form>

                                    <tr>
                                        <td colspan="6">
                                            <?php include($level . CONT_CART . 'cart_thanhtoan.php'); ?>
                                        </td>
                                    </tr>



                                    <?php }

                                        //Xử lý chưa chọn sản phẩm & hết hàng
                                        elseif ($check == false) {
                                            if (isset($_GET['status'])) {
                                                $status = $_GET['status'];
                                                if ($status == 'error') {
                                    ?>
                                            <tr>
                                                <td colspan="6">
                                                    <h4 style='margin: 25px 0px 25px 0px;'>
                                                        Rất tiếc! Sản phẩm bạn đã chọn đã hết hàng.
                                                        <a href="<?php echo $level . PAGE . 'shop.php'; ?>" style='text-decoration-line: none;font-size: 16px'>Chọn</a>
                                                    </h4>
                                                </td>
                                            </tr>

                                        <?php }
                                            } else { ?>
                                        <tr>
                                            <td colspan="6">
                                                <h4 style='margin: 25px 0px 25px 0px;'>Bạn chưa chọn sản phẩm nào ! <a href="<?php echo $level . PAGE . 'shop.php'; ?>" style='text-decoration-line: none;font-size: 16px'>Mua Ngay</a></h4>
                                            </td>
                                        </tr>
                                <?php }
                                        } ?>
                                </tbody>
                            </table>

                            <div class="cart-collaterals">
                                <div class="cross-sells">
                                    <h2>Có thể bạn quan tâm</h2>
                                    <ul class="products">
                                        <?php
                                        foreach ($Review2 as $post) {
                                        ?>
                                            <li class="product">
                                                <a href=<?php echo $level . PAGE . "single-product.php?id=" . $post['masp']; ?>>
                                                    <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src=<?php echo $level . IMG . $post['anhdaidien']; ?>>
                                                    <h3><?php echo $post['tensp']; ?></h3>
                                                    <span class="price"><span class="amount"><ins><?php echo $post['giamoi']; ?>vnđ</ins> <del><?php echo $post['giacu']; ?>vnđ</del></span></span>

                                                </a>

                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href=<?php echo $level . PAGE . "single-product.php?id=" . $post['masp']; ?>>Xem Chi Tiết</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>