<!-- Delete Product -->			
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">Xóa</button>
			<!-- The Modal -->
			<div class="modal fade" id="Delete">
				<div class="modal-dialog modal-sm">
					<form action='<?php echo $level.CONT_PRODUCT.'delete_data.php' ?>' method='GET'>
						<div class="modal-content">
						<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title" style="text-align: center;"><b>Xóa sản phẩm</b></h4>
							</div>
							<!-- Modal body -->
							<div class="modal-body">

								<div class='form-group'>
									<div class='row'>
										<div class='col-sm-6'>
											<label for='productcode' style="float:left">Mã sản phẩm:</label>
										</div>
										<div class='col-sm-6'>

											<select class='form-control' name='productcode'>
											<?php 
											foreach($Product_List as $key)
											{
											?>
											<option value='<?php echo $key['masp']; ?>'><?php echo $key['masp']; ?></option>
											<?php 
											}
											?>
											</select>
										</div>
									</div>
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
