<button type="button" class="btn btn-info" name='thanhtoan' data-toggle="modal" data-target="#ct" style='width:120px;height:42px;font-size:14px;'>Xem</button>
                <center>
                    <!-- The Modal -->
                    <div class="modal fade" id="ct">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <!-- Modal Header -->
                                <div class="modal-header">
                                    <h3 class="modal-title" style="text-align: center;"><b>Chi Tiết Hóa Đơn</b></h3>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <table class='table-bordered'>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Hình Ảnh</th>
                                                <th class="product-name">Tên Sản Phẩm</th>
                                                <th class="product-price">Giá</th>
                                                <th class="product-quantity">Số Lượng</th>
                                                <th class="product-price">Tổng Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                            foreach($_SESSION['cart'] as $post){
                                            ?>
                                            <tr class="cart_item">

                                                <!-- hình ảnh -->
                                                <td class="product-thumbnail">
                                                    <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src=<?php echo $level.IMG.$post['anhdaidien'];?>>
                                                </td>

                                                <!--  tên sản phẩm -->
                                                <td class="product-name">
                                                    <?php echo $post['tensp'];?>
                                                </td>

                                                <!-- giá bán -->
                                                <td class="product-subtotal">
                                                    <span class="amount"><?php echo $post['giamoi'];?></span> 
                                                </td>

                                                <!-- số lượng -->
                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <span><?php echo $post['soluong']; ?></span>
                                                    </div>
                                                </td> 

                                                <!-- thành tiền -->
                                                <td class="product-subtotal">
                                                    <span class="amount"><?php echo $post['thanhtien'];?></span> 
                                                </td>
                                            </tr>
                                        <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </center>