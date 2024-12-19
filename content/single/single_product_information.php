<!--kiểm tra đánh giá -->
<?php 
    $user = DP::run_query("SELECT * FROM taikhoan WHERE hoatdong=1 AND trangthai=1",[],2);

    $name = ''; $email = '';
    if(count($user) > 0)
    {
        $name = $user[0]['fullname'];
        $email = $user[0]['email'];
    }
?>
<!-- end kiểm tra đánh giá  -->
<div class="col-md-8">
    <div class="product-content-right">
         <div class="product-breadcroumb">
            <?php foreach($ChiTietSanPham as $key) 
            {
                ?>
            <a href=<?php echo $level."index.php"; ?>>Home</a>
            <a href="">Danh Mục</a>
            <a href=""><?php echo $key['tensp']; ?></a>
            <?php } 
            ?>
         </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="product-images">
                     <?php 
                     foreach($ChiTietSanPham as $key) 
                    {
                    ?>
                        <div class="product-main-img">
                            <img src=<?php echo $level.IMG.$key['anhdaidien'];?> alt="">
                        </div>
                                    
                         <div class="product-gallery">
                            <img src=<?php echo $level.IMG.$key['hinhanhkhac1'];?> alt="">
                        </div>
                    <?php 
                    } 
                    ?>
                </div>
            </div>
                            
            <div class="col-sm-6">
                <?php 
                foreach($ChiTietSanPham as $key) 
                {
                ?>
                <div class="product-inner">
                    <h2 class="product-name"><?php echo $key['tensp'];?></h2>
                    
                    <?php if($tonkho>0){ ?>
                        <div class="product-inner-price">
                            <ins><?php echo $key['giamoi'];?></ins> <del><?php echo $key['giacu'];?></del>
                        </div>              
                            <form action="<?php echo $level.CONT_CART.'cart_add.php'; ?>"class="cart"method="GET">
                                <div class="quantity">
                                    <input type="number" size="4" class="input-text qty text" value="1" name="soluong" min="1" step="1">
                                    <input type="text" name="id" hidden="true" value="<?php echo $key['masp'];?>">
                                </div>
                                    <button class="add_to_cart_button" type="submit">Thêm vào giỏ hàng</button>
                            </form>   
                    <?php } 
                    else { ?>
                        <h4 style='padding-bottom: 25px;color:red'>
                            <span class='fa fa-exclamation-circle'></span>
                            Hết Hàng !
                        </h4>
                    <?php } ?>
                        <div role="tabpanel">
                            <ul class="product-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô Tả</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bình Luận</a></li>
                            </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <h2>Thông Số Kỹ Thuật</h2>  
                                    <p><?php echo $key['mota'];?></p>
                            </div>
                <?php 
                } 
                ?>

<!-- đánh giá -->
<div role="tabpanel" class="tab-pane fade" id="profile">
    <form action="<?php echo $level.CONT.'addcomment.php' ?>" method="get" >
        <div class="submit-review">
            <p>
                <label for="name">Name</label>
                <input class="form-control" disabled value='<?php echo $name; ?>'>
                <input name="name" hidden='true' value='<?php echo $name; ?>'>
            </p>

            <p>
                <label for="email">Email</label>
                <input class="form-control" type="email" disabled value='<?php echo $email; ?>'>
                <input name="email" hidden='true' value='<?php echo $email; ?>'>
            </p>

            <p><label for="review">Đánh Giá Của Bạn</label></p>

            <p>
                <input type="text" name="ngaydang" hidden="true" value="<?php echo date('d/m/Y') ?>">

                <input type="text" name="giodang" hidden="true" value="<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('H:i'); ?>">

                <input type="text" name="idsanpham" hidden="true" value="<?php echo $ChiTietSanPham[0]['masp'] ?>">
                <input type="textarea" class="form-control" name="content" placeholder="Comment content" rows="3">
            </p>

            <p><button type='submit' class='form-control'>Gửi</button></p>
        </div>
   </form>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</div>
<!-- end đánh giá  -->

<!-- sản phẩm tương tự -->
<div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản Phẩm Tương Tự</h2>
                            <div class="related-products-carousel">

                                <?php 
                                foreach($SanPhamLienQuan as $key)
                                {
                                 ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src='<?php echo $level.IMG.$key['anhdaidien'];?>' alt="">
                                        <div class="product-hover">
                                            <a href="<?php echo $level.CONT_CART.'cart_add.php?id='.$key['masp']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ</a>
                                            <a href="<?php echo $level.PAGE.'single-product.php?id='.$key['masp']; ?>" class="view-details-link"><i class="fa fa-link"></i> Xem Chi Tiết </a>
                                        </div>
                                    </div>

                                    <h2><a href="<?php echo $level.PAGE.'single-product.php?id='.$key['masp']; ?>"><?php echo $key['tensp']; ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?php echo $key['giamoi']; ?> vnđ</ins> <del><?php echo $key['giacu']; ?> vnđ</del>
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
            </div>
        </div>
    </div>

<!-- end sản phẩm tương tự  -->