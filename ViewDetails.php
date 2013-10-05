<?php
echo "<html>";
	
	$page_name = 'Tour Details';												//used by PageName.php file
	include ('./PageName.php');
	
	echo "<body>";
		
		include ('./Navbar.inc');
	
		include ('Connection.php');
	
		$id=$_GET['id'];
		$result=mysql_query("SELECT * FROM tourdays where Tour_Id= '$id'");
		$result1 = mysql_query("SELECT Tour_Name FROM Tour where Tour_Id = $id");
		$result2 =mysql_query("SELECT Place FROM tour_place where Tour_Id=$id");
		$row1 = mysql_fetch_array($result1);
	
		echo "<div id='pageheading'>";

				$Heading=$row1['Tour_Name']."  Holiday Package:";						//used by head.inc for main heading
				include ('./head.inc');		
	
				if($row1['Tour_Name']=='Kerala')
				{	
					echo "<script src='js/Kerala.js' type='text/javascript'></script>";
					$url = "image/Kerala/pr1.jpg"; 						//Used by Slide.php for url of image
					$subheading="Indian Tourism";								//Used by Slide.php for sub title
					include ('./slide.php');
				}
				
				include ('./tourlink.inc');
				include ('./tourdetail.php');
				
				while($row=mysql_fetch_array($result))
				{
					detail($row['Day'],$row['Place'],$row['Text']);			//function detail call from tourdetail.php for fetching tour details from database			
				}
	echo <<<_END
	</body>
</head>

_END;
?>	