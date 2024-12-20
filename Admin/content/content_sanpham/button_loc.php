<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Filter">Lọc</button>
	<div class="modal fade" id="Filter">
		<div class="modal-dialog modal-lg">
			<form action='<?php echo $level.'index.php' ?>' method='GET'>
				<div class="modal-content">
				<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title" style="text-align: center;"><b>Lọc sản phẩm</b></h4>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<!--form-group: 1 nhóm của form -->
						<div class='form-group'>
							<div class='row'>
								<div class='col-sm-2'>
									<label for='productname' style="float:left">Lọc sản phẩm:</label>
								</div>
								<div class='col-lg-4'>
									<input name="productname" class='form-control' placeholder="Nhập tên sản phẩm">
								</div>
								<div class='col-sm-2'>
									<label for='price' style="float:left">Giá:</label>
								</div>
								<div class='col-lg-4'>
									<input name="price" class='form-control' placeholder="Giá">
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