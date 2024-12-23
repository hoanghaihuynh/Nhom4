<style type="text/css">
	.td,
	.th {
		padding: 15px;
	}
</style>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo '#' . $orderCode; ?>">Xem</button>
<center>
	<!-- The Modal -->
	<div class="modal fade" id="<?php echo $orderCode; ?>">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h3 class="modal-title" style="text-align: center;"><b>Chi tiết đơn hàng</b></h3>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<table class='table-bordered'>
						<thead>
							<th class='th'>Mã sản phẩm</th>
							<th class='th'>Ảnh</th>
							<th class='th'>Tên sản phẩm</th>
							<th class='th'>Giá</th>
							<th class='th'>Số lượng</th>
							<th class='th'>Tổng tiền</th>
						</thead>
						<tbody>
							<?php foreach ($OrderDetails as $k) { ?>
								<tr>
									<td class='td'><?php echo $k['masp']; ?></td>
									<td class='td'>
										<img src="<?php echo $level_2 . IMG . $k['hinhanh']; ?>" style='width:100px;height:100px'>
									</td>
									<td class='td'><?php echo $k['tensp']; ?></td>
									<td class='td'><?php echo number_format($k['giaban'], 0, ',', '.'); ?> VNĐ</td>
									<td class='td'><?php echo $k['soluong']; ?></td>
									<td class='td'><?php echo $k['thanhtien']; ?> VNĐ</td>
								<?php } ?>
								</tr>
								<tr>
									<th colspan="2" class='th'>Ngày và giờ</th>
									<th colspan="4" class='th'>
										<?php echo $ngaydat . ' - ' . $thoigian; ?>
									</th>
								</tr>
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