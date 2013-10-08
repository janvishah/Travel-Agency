<?php

echo "<html>";

	echo "<script src='js/IndianTour.js' type='text/javascript'></script>";
	
	$page_name = 'IndianTour';												//used by PageName.php file
	include ('./PageName.php');

	echo "<body>";
		
		include ('./Navbar.inc');
		
	
			echo "<div id='pageheading'>";

				$Heading="Indian Holiday Packages"; 						//used by head.inc for main heading
				include ('./head.inc');
		
				$url = "image/Indian Tour/pr1.jpg"; 						//Used by Slide.php for url of image
				$subheading="Indian Tourism";								//Used by Slide.php for sub title
				
				include ('./slide.php');
				include ('./connection.php');
				
				$result = mysql_query("select * from package_locations");
				while($row=mysql_fetch_array($result))	
				{
					$nm = $row['Location'];
					echo "<form name='form1' method=post action=Tour.php>";
					echo <<<_END
					<div class="imagediv">	
						<span>
_END;
							$img = $row['Images'];							
							echo<<<_END
							<img src="Image/Package_Locations/$img" id="image">																							
						</span>
						<span>
							<button type="submit" class="btn packagebtn" name="$nm"> 
_END;
								print $nm;
							echo<<<_END
							</button>
						</span>
					</div>
_END;
				}				
?>											
			</div>
		</form>			
	</body>
</html>