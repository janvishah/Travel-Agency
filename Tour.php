<?php
	
echo "<html>";

	
	if(isset($_POST['Kerala']))
	{
		echo"<script src='js/Kerala.js' type='text/javascript'></script>";
		$page_name = 'Kerala Tour';											//used by PageName.php file
		include ('./PageName.php');
			
		$pl = "Kerala";
			
		echo "<body>";
		
			include ('./Navbar.inc');
			
			echo "<div id='pageheading'>";

				$Heading="Kerala Holiday Packages"; 						//used by head.inc for main heading
				include ('./head.inc');
				
				$url = "image/Kerala/pr1.jpg"; 						        //Used by Slide.php for url of image
				$subheading="Kerala Tours";									//Used by Slide.php for sub title
				include ('./slide.php');
	}
?>
				<div id=pid>				
					Kerala regionally referred to as Keralam is a state in the south-west region of India on the Malabar coast. 
					It was formed on 1 November 1956 as per the States Reorganisation Act by combining various speaking regions. 
					Spread over 38,863 km2 (15,005 sq mi) it is bordered by Karnataka to the north and north east, Tamil Nadu to the east and south, and the Laccadive Sea to the west. 
					With 33,387,677 inhabitants as per the 2011 census, Kerala is the twelfth largest state by population and is divided into 14 districts.
					Malayalam is the most widely spoken and official language of the state. 
					The state capital is Thiruvananthapuram, other major cities include Kochi, Kozhikode, Kollam and Thrissur.					
				</div>
<?php
				include ('Connection.php');				
				$result=mysql_query("SELECT * FROM tour where Tour_Name= '$pl'");
				include ('./tourdata.php');
		
				while($row=mysql_fetch_array($result))
				{				
					data($row['Tour_Id'],$row['Days'],$row['Nights']);		//function call from tourdata.php				
				}	
?>				
			</div>
		</body>
</html>

