<?php
	$page_title = 'Home';	
	include ('./header.php');
	
	include ('Connection.php');
	
	$id=$_GET['id'];
	$result=mysql_query("SELECT * FROM tourdays where Tour_Id= '$id'");
	$result1 = mysql_query("SELECT Tour_Name FROM Tour where Tour_Id = $id");
	$result2 =mysql_query("SELECT Place FROM tour_place where Tour_Id=$id");
	$row1 = mysql_fetch_array($result1);
	
	$Title=$row1['Tour_Name']."  Holiday Package:";
	include ('./head.inc');
	
		if($row1['Tour_Name']=='Kerala')
		{
		
			$Title2="Kerala";
			include ('./slide.inc');
		}
		include ('./tourlink.inc');
		include ('./tourdetail.php');
		while($row=mysql_fetch_array($result))
		{
			detail($row['Day'],$row['Place'],$row['Text']);
					
		}
	echo <<<_END
	</body>
</head>

_END;
?>	