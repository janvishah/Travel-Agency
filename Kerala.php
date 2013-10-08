<?php
echo"<script src='js/Kerala.js' type='text/javascript'></script>";
		$page_name = 'Kerala Tour';											//used by PageName.php file
		include ('./PageName.php');
		include ('./connection.php');	
		$pl = "Kerala";
		$result = mysql_query("select Text from package_locations where Location='$pl' ");
		$row = mysql_fetch_array($result);
			include ('./Navbar.inc');
			
			echo "<div id='pageheading'>";									//This Tag is Closed in Tour.php

				$Heading="Kerala Holiday Packages"; 						//used by head.inc for main heading
				include ('./head.inc');
				
				$url = "image/Kerala/pr1.jpg"; 						        //Used by Slide.php for url of image
				$subheading="Kerala Tours";									//Used by Slide.php for sub title
				include ('./slide.php');
				echo "<div id=pid>";
					Print $row['Text'];				
				echo "</div>";					
?>
						