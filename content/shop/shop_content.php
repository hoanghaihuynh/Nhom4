
    
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
                        <li><a href="<?php echo $level.'index.php';?>">Home</a></li>
                        <li class="active"><a href="<?php echo $level.PAGE.'shop.php';?>">Sản Phẩm</a></li>
                        <li><a href="<?php echo $level.PAGE.'cart.php';?>">Giỏ Hàng</a></li>
                        <li><a href="<?php echo $level.PAGE.'order.php';?>">Đơn Đặt Hàng</a></li>
                        <!--<li><a href="#">Liên Hệ</a></li>-->
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
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php
            foreach($danhsachSP as $SP)
            {
                //tồn kho
                $id = $SP['masp'];
                $kho = DP::run_query("SELECT * FROM kho WHERE masp=?",[$id],2);
                $tonkho= $kho[0]['soluong_ton'];
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <a href='<?php echo $level.PAGE.'single-product.php?id='.$SP['masp']; ?>'>
                            <img src='<?php echo $level.IMG.$SP["anhdaidien"];?>' alt="">
                        </a>
                    </div>
                    <h2><a href='<?php echo $level.PAGE.'single-product.php?id='.$SP['masp']; ?>'style='text-decoration-line: none'><?php echo $SP["tensp"];?></a></h2>
                    <div class="product-carousel-price">
                        <ins><?php echo $SP["giamoi"]." vnđ";?></ins> 
                    </div>  
                    
                    <?php if($tonkho>0){ ?>
                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href=<?php echo $level.CONT_CART.'cart_add.php?id='.$SP['masp'] ?>> Thêm vào giỏ hàng </a>
                    </div>   

                    <?php }
                    else { ?>
                    <div class="product-option-shop">
                        <h4 style='color:red'>
                            <span class='fa fa-exclamation-circle'></span>&nbsp;Hết Hàng
                        </h4>
                    </div> 
                    <?php } ?>
                </div>
            </div>
           
           <?php
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
</div>