<?php 
	//auto increase product code
	$count = count($Product_List) + 1;
 ?>
<style>
	/* CSS */
	th{
		text-align: center;
	}
	td{
		text-align: center;
 	}

	img{
		width: 100px;
		height: 100px;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Danh Sách Sản Phẩm</h1>
	</div>

</div><!--/.row-->
	
<div class="panel panel-container">
	<!-- nhóm button -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 50px'>
		<?php 
			include('content_sanpham/button_them.php');
			include('content_sanpham/button_capnhat.php');
			include('content_sanpham/button_xoa.php');
			include('content_sanpham/button_loc.php');
		 ?>
	</div>



	<!-- Product List -->
	<table class="table table-bordered" style="width: 90%; border: 2px solid black; margin-left: 50px;">
	    <thead>
		    <tr>
		        <th>Danh sách sản phẩm</th>
		        <th>Tên Sản Phẩm</th>
		        <th>Giá</th>
				<th>Tình trạng</th>
				<th>Xem chi tiết</th>
		    </tr>
		</thead>
		<tbody>
			<?php 
			foreach($Product_List as $key)
			{	
				$productcode = $key['masp'];
				$productname = $key['tensp'];
				$price = "";
				if(isset($key['giamoi']))
					$price =$key['giamoi']." vnđ";
				$status = "Ngừng kinh doanh";
				if($key['trangthai'] == 1)
					$status = "Sản phẩm mới";
			?>
			<tr>
				<td><?php echo $productcode; ?></td>
				<td><?php echo $productname; ?></td>
				<td><?php echo $price; ?></td>
				<td><?php echo $status; ?></td>
				<td><?php include('content_sanpham/button_ctsp.php'); ?></td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>