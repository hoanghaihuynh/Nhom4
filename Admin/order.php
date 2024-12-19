<?php
	$level = "";

	// level_2 ra ngoài vào thư mục img/
	$level_2 = "../";
	include($level."config.php");
	$_isPostIndex = false;
	$_isPostComment = false;
	$_isPostOrder = true;
	include($level."layout.php");
?>