<?php 
	session_start();
	$level = '../../';
	include($level.'config.php');
	include($level.'DB.php');	

	$masp = $_GET['id'];

	// Kiểm tra tồn kho
	$kho = DP::run_query("SELECT * FROM kho WHERE masp=?",[$masp],2);
	$tonkho = $kho[0]['soluong_ton'];
	if($tonkho == 0)
	{
		$status = 'error';
		header('location:'.$level.PAGE.'cart.php?status='.$status);
	}
	else
	{
		$SP = DP::run_query("SELECT * FROM sanpham WHERE masp=?",[$masp],2);

		$hinhanh = $SP[0]['anhdaidien'];
		$tensp = $SP[0]['tensp'];
		$giamoi = $SP[0]['giamoi'];

		$giamoi = floatval(str_replace('.', '', $giamoi));
		$giamoi_format = number_format($giamoi, 0, ',', '.');  
		// Kiểm tra session của mã sản phẩm đã có giá trị chưa
		if(isset($_SESSION['cart'][$masp]))
		{	
			$soluong = $_SESSION['cart'][$masp]['soluong'];
			
			if(isset($_GET['soluong'])) // ở trang single
				$soluong = $_GET['soluong'];
				
				$_SESSION['cart'][$masp]['soluong'] += $soluong;
				$_SESSION['cart'][$masp]['thanhtien'] = number_format($_SESSION['cart'][$masp]['soluong'] * $giamoi, 0, ',', '.'); 
		}

		// Session chưa có giá trị
		else
		{
			$soluong = 1;

			if(isset($_GET['soluong']))
				$soluong = $_GET['soluong'];
				$thanhtien = number_format($soluong * $giamoi, 0, ',', '.');
				$_SESSION['cart'][$masp] = array('masp'=>$masp, 'anhdaidien'=>$hinhanh, 'tensp'=>$tensp, 'giamoi'=>$giamoi, 'soluong'=>$soluong, 'thanhtien'=>$thanhtien);

			header('location:'.$level.PAGE.'cart.php');
		}
	}
?>
