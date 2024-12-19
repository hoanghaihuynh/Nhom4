
<!--NOI DUNG CHINH - LATEST PRODUCT -->

<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">SẢN PHẨM NỔI BẬT</h2>
                        <div class="product-carousel">
                            <?php 
                            foreach($noidungchinh as $key)
                            {
                             ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src=<?php echo $level.IMG.$key['anhdaidien']; ?> alt="">
                                    <div class="product-hover">
                                        <a href="<?php echo $level.CONT_CART.'cart_add.php?id='.$key['masp']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ </a>
                                        <a href="<?php echo $level.PAGE.'single-product.php?id='.$key['masp']?>" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                                    </div>
                                </div>
                                
                                <h2>
                                    <a href="<?php echo $level.PAGE.'single-product.php?id='.$key['masp']?>"> <?php echo $key['tensp']; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo $key['giamoi']; ?>vnđ</ins> <del><?php echo $key['giacu']; ?>vnđ</del>
                                </div> 
                            </div>
                            <?php 
                            }
                             ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->