<?php
$check = false;
if (count($DS_donhang) > 0)
	$check = true;
?>
<style>
	th {
		text-align: center;
		padding: 10px;
	}

	td {
		text-align: center;
		padding: 10px;
	}

	.ThongBao {
		border: 2px solid black;
		border-radius: 5px;
		margin: 100px 0px 100px 0px;
		padding: 50px;
		text-align: center;
	}
</style>


<div class='container'>
	<?php if ($check == true) { ?>
		<table class='table-bordered' style='margin:100px 0px 100px 0px;'>
			<thead>
				<th>Mã đặt hàng</th>
				<th>Ngày</th>
				<th>Thời gian</th>
				<th>Khách hàng</th>
				<th>Số điện thoại</th>
				<th>Địa chỉ</th>
				<th>Tổng tiền</th>
				<th>Hình thức thanh toán</th>
				<th>Hình thức giao hàng</th>
				<th>Phí giao hàng</th>
				<th>Tình trạng</th>
				<th>Xem chi tiết</th>
			</thead>
			<tbody>
				<?php foreach ($DS_donhang as $dh) { ?>
					<tr>
						<?php
						$madh = $dh['madh'];
						$DS_CTDH = DP::run_query("SELECT * FROM ctdh WHERE madh=?", [$madh], 2);
						$id = $DS_CTDH[0]['madh'];
						?>

						<td><?php echo $madh; ?></td>
						<td><?php echo $dh['ngaydat']; ?></td>
						<td><?php echo $dh['thoigian']; ?></td>
						<td><?php echo $fullname; ?></td>
						<td><?php echo $dh['sdt']; ?></td>
						<td><?php echo $dh['diachi']; ?></td>
						<td><?php echo number_format($dh['tongtien'], 0, ',', '.') . ' VNĐ'; ?></td>
						<td><?php echo $dh['hinhthucTT']; ?></td>
						<td><?php echo $dh['hinhthucGH']; ?></td>
						<td><?php echo number_format($dh['ship'], 0, ',', '.') . ' VNĐ'; ?></td>
						<td><?php echo $dh['trangthai']; ?></td>

						<td>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo '#' . $id; ?>" style='width:120px;height:42px;font-size:14px;'>Xem</button>
							<center>
								<!-- The Modal -->
								<div class="modal fade" id="<?php echo $id; ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<!-- Modal Header -->
											<div class="modal-header">
												<h3 class="modal-title" style="text-align: center;"><b>Chi tiết hóa đơn</b></h3>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<table class='table-bordered'>
													<thead>
														<tr>
															<th class="product-thumbnail">Hình Ảnh</th>
															<th class="product-name">Sản Phẩm</th>
															<th class="product-price">Giá</th>
															<th class="product-quantity">Số Lượng</th>
															<th class="product-price">Tổng Tiền</th>
														</tr>
													</thead>
													<tbody>
														<?php
														foreach ($DS_CTDH as $post) {
														?>
															<tr class="cart_item">

																<!-- hình ảnh -->
																<td class="product-thumbnail">
																	<img width="145" height="145" src=<?php echo $level . IMG . $post['hinhanh']; ?>>
																</td>

																<!--  tên sản phẩm -->
																<td class="product-name">
																	<?php echo $post['tensp']; ?>
																</td>

																<!-- giá bán -->
																<td class="product-subtotal">
																	<span class="amount"><?php echo $post['giaban']; ?></span>
																</td>

																<!-- số lượng -->
																<td class="product-quantity">
																	<div class="quantity buttons_added">
																		<span><?php echo $post['soluong']; ?></span>
																	</div>
																</td>

																<!-- thành tiền -->
																<td class="product-subtotal">
																	<span class="amount"><?php echo $post['thanhtien']; ?></span>
																</td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>

										</div>
									</div>
								</div>
							</center>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<?php } else {
		if ($str == 'Log In') { ?>

			<h3 class='ThongBao'>Vui lòng đăng nhập để kiểm tra đơn hàng. <a href="<?php echo $level . 'login.php'; ?>" style='text-decoration:none; font-size:22px'>Login</a></h3>

		<?php } else { ?>

			<h3 class='ThongBao'>Bạn chưa có đơn đặt hàng nào. <a href="<?php echo $level . PAGE . 'shop.php'; ?>" style='text-decoration:none; font-size:22px'>Mua ngay</a></h3>

	<?php }
	} ?>
</div>