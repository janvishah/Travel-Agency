<?php
echo "<html>";
	
	$page_name = 'Tour Details';												//used by PageName.php file
	include ('./PageName.php');
	
	echo "<body>";
		
		include ('./Navbar.inc');
	
		include ('Connection.php');
	
		$id=$_GET['id'];
		
		$result1 = mysql_query("SELECT Package_Location_Id FROM tours where Id = $id");		
		$row = mysql_fetch_array($result1);
		$plid = $row['Package_Location_Id'];
		$result3 = mysql_query("SELECT Location FROM Package_Locations where Id = $plid");
		$row3 = mysql_fetch_array($result3);
		echo "<div id='pageheading'>";

				$Heading=$row3['Location']."  Holiday Package:";						//used by head.inc for main heading
				include ('./head.inc');		
	
				include ('./Placeslide.php');											// Used for slide for specific place
				include ('./tourlink.php');												//Includes form link
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