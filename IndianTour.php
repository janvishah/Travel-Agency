<?php
	$page_title = 'Indian Tour';	
	include ('./header.php');

	$Title="Indian Holiday Packages";
	include ('./head.inc');

		$Title2="Indian Tourism";
		include ('./slide.inc');
?>	

			<form name="form1" method=post action="Tour.php">
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
			</form>
		</div>		
	</body>
</html>