<head>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
	.icon{
		font-size:18px;
	}
</style>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo $level_2.IMG.'img_avatar2.png';?>" style='border-radius:50%; width:50px,height:50px'>
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $AdminName[0]['fullname']; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-laptop icon">&nbsp;</em>Danh Sách Sản Phẩm</a></li>
			<li class='active'><a href="comment.php"><em class="fa fa-comment icon">&nbsp;</em>Danh Sách Bình Luận</a></li>
			<li><a href="order.php"><em class="fa fa-truck icon">&nbsp;</em>Danh Sách Đơn Hàng</a></li>
			<li><a href="<?php echo $level_2.'content/logout.php' ?>"><em class="fa fa-power-off icon">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Danh Sách Bình Luận</li>
			</ol>
		</div><!--/.row-->
		
	