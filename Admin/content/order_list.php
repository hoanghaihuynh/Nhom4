<style>
	/* CSS */
	th,
	td {
		text-align: center;
		vertical-align: middle;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách đơn hàng</h1>
	</div>

</div><!--/.row-->

<div class="panel panel-container" style='padding-bottom: 50px'>
	<!-- button group -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 30px'>

		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Update">Cập nhật</button>
		<!-- The Modal -->
		<div class="modal fade" id="Update">
			<div class="modal-dialog">
				<form action='<?php echo $level . CONT_ORDER . 'order_update.php' ?>' method='GET'>
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title" style="text-align: center;"><b>Cập nhật thông tin</b></h4>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class='row'>
								<div class='col-md-6'>
									<div class='form-group'>
										<label for='ordercode'>Mã đơn hàng</label>
										<select class='form-control' name='ordercode'>
											<?php foreach ($Order_List as $key) { ?>

												<option value='<?php echo $key['madh']; ?>'><?php echo $key['madh']; ?></option>

											<?php } ?>
										</select>
									</div>

									<div class='form-group'>
										<label for='customer'>Khách hàng</label>
										<input name="customer" class='form-control' required>
									</div>

									<div class='form-group'>
										<label for='phone'>Số điện thoại</label>
										<input name="phone" class='form-control' required>
									</div>

									<div class='form-group'>
										<label for='address'>Địa chỉ</label>
										<input name='address' class='form-control' required>
									</div>

								</div>
								<div class='col-md-6'>
									<div class='form-group'>
										<label for='payments'>Thanh toán</label>
										<select class='form-control' name='payments'>
											<option value='Thẻ tín dụng'>Thẻ tín dụng</option>
											<option value='Tiền mặt'>Tiền mặt</option>
										</select>
									</div>

									<div class='form-group'>
										<label for='delivery'>Hình thức giao hàng</label>
										<select class='form-control' name='delivery'>
											<option value='Giao hàng nhanh'>Giao hàng nhanh</option>
											<option value='Giao hàng tiết kiệm'>Giao hàng tiết kiệm</option>
										</select>
									</div>

									<div class='form-group' style='padding-top: 11px'>
										<label for='email'>Email</label>
										<input name='email' class='form-control'>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type='submit' class='btn btn-success'>Cập nhật</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<button type="button" class="btn btn-success" style="background-color:#FFFF33" data-toggle="modal" data-target="#Approved">Duyệt</button>
		<!-- The Modal -->
		<div class="modal fade" id="Approved">
			<div class="modal-dialog">
				<form action='<?php echo $level . CONT_ORDER . 'order_approved.php' ?>' method='GET'>
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title" style="text-align: center;"><b>Cập nhật trạng thái</b></h4>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class='row'>
								<div class='col-md-6'>
									<div class='form-group'>
										<label for='ordercode'>Mã đơn hàng</label>
										<select class='form-control' name='ordercode'>
											<?php foreach ($Order_List as $key) { ?>

												<option value='<?php echo $key['madh']; ?>'><?php echo $key['madh']; ?></option>

											<?php } ?>
										</select>
									</div>
									<div class='form-group'>
										<label for='status'>Status</label>
										<select class='form-control' name='status'>
											<option value='Vận chuyển'>Vận chuyển</option>
											<option value='Giao hàng thành công'>Giao hàng thành công</option>
											<option value='Bị hủy bỏ'>Bị hủy bỏ</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type='submit' class='btn btn-success' style="background-color:#FFFF33">Duyệt</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">Xóa</button>
		<!-- The Modal -->
		<div class="modal fade" id="Delete">
			<div class="modal-dialog modal-sm">
				<form action='<?php echo $level . CONT_ORDER . 'order_delete.php' ?>' method='GET'>
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title" style="text-align: center;"><b>Xóa đơn hàng</b></h4>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class='form-group'>
								<label for='ordercode'>Mã đơn hàng</label>
								<select class='form-control' name='ordercode'>
									<?php foreach ($Order_List as $key) { ?>
										<option value='<?php echo $key['madh']; ?>'><?php echo $key['madh']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type='submit' class='btn btn-warning'>Xóa</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Filter">Lọc đơn hàng</button>
		<div class="modal fade" id="Filter">
			<div class="modal-dialog modal-lg">
				<form action='<?php echo $level . 'order.php' ?>' method='GET'>
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title" style="text-align: center;"><b>Lọc đơn hàng</b></h4>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<!--form-group: 1 nhóm của form -->
							<div class='form-group'>
								<div class='row'>
									<div class='col-sm-2'>
										<label for='customer' style="float:left">Khách hàng:</label>
									</div>
									<div class='col-lg-4'>
										<input name="customer" class='form-control' placeholder="Nhập tên khách hàng">
									</div>
									<div class='col-sm-2'>
										<label for='date' style="float:left">Ngày:</label>
									</div>
									<div class='col-lg-4'>
										<input name="date" class='form-control' placeholder="Nhập ngày">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type='submit' class='btn btn-primary'>Lọc</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- load danh sách đơn hàng -->
	<table class='table table-bordered' style='width: 95%; border: 2px solid black; margin-left:30px;'>
		<thead>
			<tr>
				<th>Mã đơn hàng</th>
				<th>Tài khoản</th>
				<th>Khách hàng</th>
				<th>Số điện thoại</th>
				<th>Địa chỉ</th>
				<th>Email</th>
				<th>Tổng tiền</th>
				<th>Hình thức thanh toán</th>
				<th>Hình thức giao hàng</th>
				<th>Phí giao hàng</th>
				<th>Tình trạng</th>
				<th>Chi tiết đơn hàng</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($Order_List as $key) {
				$orderCode = $key['madh'];

				$OrderDetails = DP::run_query("SELECT * FROM ctdh WHERE madh=?", [$orderCode], 2);

				$ngaydat = $key['ngaydat'];
				$thoigian = $key['thoigian'];
				$account = $key['username'];
				$customer = $key['khachhang'];
				$phone = $key['sdt'];
				$address = $key['diachi'];
				$email = $key['email'];
				$tongtien = $key['tongtien'];
				$hinhthuctt = $key['hinhthucTT'];
				$hinhthucgh = $key['hinhthucGH'];
				$ship = $key['ship'];
				$trangthai = $key['trangthai'];
			?>
				<tr>
					<td><?php echo $orderCode; ?></td>
					<td><?php echo $account; ?></td>
					<td><?php echo $customer; ?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $address; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo number_format($tongtien, 0, ',', '.') . ' VNĐ'; ?></td>
					<td><?php echo $hinhthuctt; ?></td>
					<td><?php echo $hinhthucgh; ?></td>
					<td><?php echo $ship . ' VNĐ'; ?></td>
					<td><?php echo $trangthai; ?></td>
					<td><?php include($level . CONT_ORDER . 'ctdonhang.php'); ?></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>