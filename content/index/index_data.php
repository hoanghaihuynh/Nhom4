<?php

	$noidungchinh = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM1' ",[],2);

	$topSeller = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM2' ",[],2);

	$moixem = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM4' ",[],2);

	$topSale = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM3' ",[],2);

	$logomid = DP::run_query("SELECT logo.tenfile FROM logo",[],2);
	

?>