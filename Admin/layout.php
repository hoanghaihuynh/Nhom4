<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php 
		include($level.Header_Path."Header.php");
	
		if($_isPostIndex == true)
		{
			include($level.CONT."index_data.php");
			include($level.CONT."index_sidebar.php");
			include($level.CONT."index_list.php");
		}

		
		if($_isPostComment == true)
		{		
			include($level.CONT.'comment_data.php');
			include($level.CONT.'comment_sidebar.php');
			include($level.CONT.'comment_list.php');
		}

		if($_isPostOrder == true)
		{
			include($level.CONT.'order_data.php');
			include($level.CONT.'order_sidebar.php');
			include($level.CONT.'order_list.php');
		}
		
	
		include($level.Footer_Path."Footer.php");
	 ?>
</body>
</html>
