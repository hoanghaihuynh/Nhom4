<?php 

	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$ordercode = $_GET['ordercode'];
	$customer = $_GET['customer'];
	$phone = $_GET['phone'];
	$address = $_GET['address'];
	$email = $_GET['email'];
	$payments = $_GET['payments'];
	$delivery = $_GET['delivery'];

	$ship = 0;
	if(isset($delivery))
		if($delivery == "Giao hàng nhanh")
			$ship = '50.000';
		else
			$ship = '20.000';

	$update = DP::run_query("UPDATE donhang SET khachhang=?,sdt=?,diachi=?,email=?,hinhthucTT=?,hinhthucGH=?,ship=? WHERE madh=?",[$customer,$phone,$address,$email,$payments,$delivery,$ship,$ordercode],1);

	//var_dump($update);
	header('location:'.$level.'order.php');
 ?>