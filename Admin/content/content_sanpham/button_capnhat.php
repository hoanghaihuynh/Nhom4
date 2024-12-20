<!-- Update product -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Update">Cập nhật</button>
<!-- The Modal -->
<div class="modal fade" id="Update">
	<div class="modal-dialog modal-lg">
		<form action='<?php echo $level.CONT_PRODUCT.'update_data.php' ?>' method='GET'>
			<div class="modal-content">
			<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="text-align: center;"><b>Cập nhật sản phẩm</b></h4>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class='form-group'>
						<div class='row'>
							<div class='col-sm-2'>
								<label for='productcode' style="float:left">Mã sản phẩm:</label>
							</div>
							<div class='col-sm-4'>

								<select class='form-control' name='productcode'>
									<?php 
									foreach($Product_List as $sp)
									{
									?>
									<option value='<?php echo $sp['masp'];?>'><?php echo $sp['masp'];?></option>
									<?php 
									}
									?>
								</select>
							</div>
							<div class='col-sm-2'>
								<label for='productname' style="float:left">Tên sản phẩm:</label>
							</div>
							<div class='col-lg-4'>
								<input name="productname" class='form-control' required>
							</div>
						</div>
					</div>
					
					<div class='form-group'>
						<div class='row'>
							<div class='col-sm-2'>
								<label for='avatar' style="float:left">Avatar:</label>
							</div>
							<div class='col-sm-4'>
								<input type=file name="avatar" class='form-control' required>
							</div>
							<div class='col-sm-2'>
								<label for='categories' style="float:left">Danh mục:</label>
							</div>
							<div class='col-sm-4'>
								<input name="categories" class='form-control' required>
							</div>
						</div>
					</div>
					
					<div class='form-group'>
						<label for='description' style="float:left">Mô tả:</label>
						<textarea class='form-control' style="height:100px" name='description' required></textarea>
					</div>

					<div class='form-group'>
						<div class='row'>
							<div class='col-sm-2'>
								<label for='otherimage1' style="float:left">Hình ảnh khác:</label>
							</div>
							<div class='col-sm-4'>
								<input type='file' name="otherimage1" class='form-control'>
							</div>
						</div>
					</div>

					<div class='form-group'>
						<div class='row'>
							<div class='col-sm-2'>
								<label for='newprice' style="float:left">Giá mới:</label>
							</div>
							<div class='col-sm-4'>
								<input name="newprice" class='form-control' required>
							</div>
							<div class='col-sm-2'>
								<label for='oldprice' style="float:left">Giá cũ:</label>
							</div>
							<div class='col-sm-4'>
								<input name="oldprice" class='form-control' required>
							</div>
						</div>
					</div>
					
					<div class='form-group'>
						<div class='row'>
							<div class='col-sm-2'>
								<label for='status' style="float:left">Tình trạng:</label>
							</div>
							<div class='col-sm-4'>
								<select class='form-control' name='status'>
									<option value='1'>Sản phẩm mới</option>
									<option value='0'>Ngừng kinh doanh</option>
								</select>
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