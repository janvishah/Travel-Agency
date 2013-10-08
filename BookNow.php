<?php

echo "<html>";
	include ('Connection.php');	
	$id=$_GET['id'];
	$result=mysql_query("SELECT Id,Package_Id,Rate FROM tour_packages where Tour_Id= $id");	
	$page_name = 'Home';										//used by PageName.php file
	include ('./PageName.php');
		
	echo "<body>";
		echo "<script src='js/Validation.js' type='text/javascript'></script>";
		echo <<<_END
		<form name=form1 method=post action=BookingConfirmation.php?id=$id onsubmit="return validate();">
_END;
			include ('./Navbar.inc');
			echo "<div id='pageheading'>";
				$Heading="Booking Form"; 							//used by head.inc for main heading
				include ('./head.inc');
			
				$url = "image/Home/pr1.jpg"; 							//Used by Slide.php for url of image
				$subheading="Please fill your detail in below form";	//Used by Slide.php for sub title
				include ('./slide.php');
		
				include ('./Form.inc');
				include ('./package.php');
				$count=0;
				while($row=mysql_fetch_array($result))
				{					
					$count++;
					$pid=$row['Id'];
					echo "<div>";
						package($row['Package_Id'],$row['Rate'],$row['Id']);	
						echo'<li class="packagedata selecteno">';
							echo '<input type="text" name="$pid " size="15" />';			
						echo'</li>';
					echo "</div>";
				}
?>
				<div>
					<input type="submit"  name="Booking" value="Booking"  class="btn">				
				</div>
			</div>
		</form>
	</body>
<html>	