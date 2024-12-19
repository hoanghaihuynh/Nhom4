<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE BÁN LAPTOP</title>
</head>
<body>
	
<?php
	include_once($level.CONT_INDEX."index_data.php");
	include_once ($level.HEAD."menuheader.php");
	include_once($level.CONT_INDEX."logotop.php");
?>
<?php
	if($_hasSlideShow==true)
	{
		include_once($level.CONT_INDEX."index_mainmenu.php");
		include ($level.CONT."SlideShow.php");
	}
	if($_isPostIndex==true)
	{

		include_once($level.CONT_INDEX."index_data.php");
		include_once($level.CONT_INDEX."index_latestproduct.php");
		include_once($level.CONT_INDEX."index_bottom.php");
	
	}
	if ($_isPostCart==true)
	{
		include_once($level.CONT_CART."cart_data.php");
		include_once($level.CONT_CART."cart_MainMenu.php");
	}
	if ($_isPostOrder==true)
	{
		include_once($level.CONT_ORDER."order_data.php");
		include_once($level.CONT_ORDER."order_MainMenu.php");
		include_once($level.CONT_ORDER."order_content.php");
	}
	if($Show_ShopPage == true)
	{
		include($level.CONT_SHOP."shop_data.php");
		include($level.CONT_SHOP."shop_content.php");
	}

	if($Show_SingleProduct == true)
	{
		include($level.CONT_SINGLE."single_data.php");
		include($level.CONT_SINGLE."single_MainMenu.php");
		include($level.CONT_SINGLE."single_product_information.php");
		include($level.CONT_SINGLE."single_binhluan.php");
	}
	if($search_page == true)
	{
		include($level.CONT_SEARCH."search_data.php");
		include($level.CONT_SEARCH."search_content.php");
	}
	if($account== true)
	{
		include($level.CONT_ACC."data_account.php");
		include($level.CONT_ACC."capnhat_account.php");
	}
	


 ?>
  <?php
  include_once($level.FOOT."footer.php"); 
 ?>
</body>
</html>