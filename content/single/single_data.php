<?php 

	$idsanpham=$_GET['id'];

	$ChiTietSanPham = DP::run_query("SELECT * FROM sanpham WHERE sanpham.masp=?",[$idsanpham],2);

	$SanPham = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc
	 like 'CM1' limit 1,4",[],2);

	$SanPhamLienQuan = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM1' ",[],2);

	$BaiVietGanDay = DP::run_query("SELECT * FROM baivietganday",[],2);
	
	$dsbinhluan=DP::run_query("SELECT *  FROM  binhluan WHERE binhluan.masp=? AND binhluan.trangthai=N'Chấp Nhận'",[$idsanpham],2);

	//tồn kho
	$kho = DP::run_query("SELECT * FROM kho WHERE masp=?",[$idsanpham],2);
	$tonkho = $kho[0]['soluong_ton'];
	
 ?>