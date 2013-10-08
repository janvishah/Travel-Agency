<?php
echo"<script src='js/Kashmir.js' type='text/javascript'></script>";
		$page_name = 'Kashmir Tour';											//used by PageName.php file
		include ('./PageName.php');
			
		$pl = "Kashmir";			
		include ('./connection.php');	
		$result = mysql_query("select Text from package_locations where Location='$pl' ");
		$row = mysql_fetch_array($result);
			
		include ('./Navbar.inc');
			
		echo "<div id='pageheading'>";										//This Tag is closed in tour.php

			$Heading="Kashmir Holiday Packages"; 						   	//used by head.inc for main heading
			include ('./head.inc');
				
			$url = "image/Kashmir/pr1.jpg"; 						        //Used by Slide.php for url of image
			$subheading="Kashmir Tours";									//Used by Slide.php for sub title
			include ('./slide.php');
			echo "<div id=pid>";
				Print $row['Text'];				
			echo "</div>";	
?>