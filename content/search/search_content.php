
    <!-- Menu -->
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
                        <li class="active"><a href="<?php echo $level.'index.php';?>">Home</a></li>
                        <li><a href="<?php echo $level.PAGE.'shop.php';?>">Sản Phẩm</a></li>
                        <li><a href="<?php echo $level.PAGE.'cart.php';?>">Giỏ Hàng</a></li>
                        <li><a href="<?php echo $level.PAGE.'order.php';?>">Đơn Đặt Hàng</a></li>
                        <!--<li><a href="#">Liên Hệ</a></li>-->
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu-->

    <!-- Search tiêu đề -->
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center" >
                        <h2 style="font-family: Tahoma">KẾT QUẢ TÌM KIẾM CHO "<?php echo $name?>"</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End search tiêu đề -->
 
   <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
				if(empty($danhsachSP))
				{
				?>
					
					<p><h4 style="text-align: center">Không tìm thấy sản phẩm</h4></p>
					
				<?php
				}
				else
				{
					foreach($danhsachSP as $SP)
					{ 
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src=<?php echo $level.IMG.$SP["anhdaidien"];?> alt="">
                        </div>
                        <h2><a href = <?php echo $level.PAGE.'single-product.php?id='.$SP['masp'] ?>><?php echo $SP["tensp"];?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php echo $SP["giamoi"]." vnđ";?></ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href=<?php echo $level.CONT_CART.'cart_add.php?id='.$SP['masp'] ?>>Thêm vào giỏ </a>
                        </div>                       
                    </div>
                </div>
               
               <?php
					}
				}
           ?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
