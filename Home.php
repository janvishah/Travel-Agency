<?php
echo "<html>";
	echo "<script src='js/Home.js' type='text/javascript'></script>";
	$page_name = 'Home';											//used by PageName.php file
	include ('./PageName.php');
	
	echo "<body>";
		
		include ('./Navbar.inc');
		
		echo "<div id='pageheading'>";
			
			$Heading="Welcome to Information Travel"; 				//used by head.inc for main heading
			include ('./head.inc');
	
			$url = "image/Home/pr1.jpg"; 							//Used by Slide.php for url of image
			$subheading="";											//Used by Slide.php for sub title
			include ('./slide.php');
?>			
		</div>
	</body>
</html>