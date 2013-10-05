<?php
echo "<html>";
	
	$page_name = 'Tour Details';												//used by PageName.php file
	include ('./PageName.php');
	
	echo "<body>";
		
		include ('./Navbar.inc');
	
		include ('Connection.php');
	
		$id=$_GET['id'];
		
		$result1 = mysql_query("SELECT Package_Location_Id FROM tour where Id = $id");		
		$row = mysql_fetch_array($result1);
		$plid = $row['Package_Location_Id'];
		$result3 = mysql_query("SELECT Location FROM Package_Location where Id = $plid");
		$row3 = mysql_fetch_array($result3);
		echo "<div id='pageheading'>";

				$Heading=$row3['Location']."  Holiday Package:";						//used by head.inc for main heading
				include ('./head.inc');		
	
				if($row3['Location']=='Kerala')
				{	
					echo "<script src='js/Kerala.js' type='text/javascript'></script>";
					$url = "image/Kerala/pr1.jpg"; 						//Used by Slide.php for url of image
					$subheading="Indian Tourism";								//Used by Slide.php for sub title
					include ('./slide.php');
				}
				if($row3['Location']=='Kashmir')
				{	
					echo "<script src='js/Kashmir.js' type='text/javascript'></script>";
					$url = "image/Kashmir/pr1.jpg"; 						//Used by Slide.php for url of image
					$subheading="Indian Tourism";								//Used by Slide.php for sub title
					include ('./slide.php');
				}
				
				include ('./tourlink.inc');
				include ('./tourdetail.php');
				$result=mysql_query("SELECT * FROM tour_days where Tour_Id= '$id'");
				while($row1=mysql_fetch_array($result))
				{
					$dayid=$row1['Day_Id'];
					detail($row1['Day']);			//function detail call from tourdetail.php for fetching tour details from database			
					$result2 =mysql_query("SELECT Text FROM days where id=$dayid");	
					while($row2=mysql_fetch_array($result2))
					{
						daydetail($row2['Text']);
					}
				}
	echo <<<_END
	</body>
</head>

_END;
?>	