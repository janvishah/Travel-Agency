<?php

echo "<html>";

	echo "<script src='js/IndianTour.js' type='text/javascript'></script>";
	
	$page_name = 'IndianTour';												//used by PageName.php file
	include ('./PageName.php');

	echo "<body>";
		
		include ('./Navbar.inc');
		echo "<form name='form1' method=post action='Tour.php'>";
	
			echo "<div id='pageheading'>";

				$Heading="Indian Holiday Packages"; 						//used by head.inc for main heading
				include ('./head.inc');
		
				$url = "image/Indian Tour/pr1.jpg"; 						//Used by Slide.php for url of image
				$subheading="Indian Tourism";								//Used by Slide.php for sub title
				include ('./slide.php');
?>				
				<div class="imagediv">	
					<img src="Image\Chardham.jpg" id="image">
					<img src="Image\Hydrabad.jpg" id="image">
					<img src="Image\Kashmir.jpg" id="image">			
				</div>
		
				<div class="imagediv">	
					<button type="submit" class="btn btn1">Chardham</button>	
					<button type="submit" class="btn btn2">Hydrabad</button>	
					<button type="submit" name="Kashmir" class="btn btn3">Kashmir</button>
				</div>
		
				<div class="imagediv">
					<img src="Image\Ooty.jpg" id="image">	
					<img src="Image\LehLadakh.jpg" id="image">
					<img src="Image\HimachalPradesh.jpg" id="image">	
				</div>	
			
				<div class="imagediv">		
					<button type="submit" name="Kerala" class="btn btn1">Kerala</button>
					<button type="submit" class="btn btn2">LehLadakh</button>
					<button type="submit" class="btn btn3">HimachalPradesh</button>
				</div>
			</div>
		</form>			
	</body>
</html>