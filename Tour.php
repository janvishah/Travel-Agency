<?php
	
echo "<html>";

	echo "<body>";
		if(isset($_POST['Kerala']))
		{		
			include ('./Kerala.php'); 				//file include the the heading and detail abt kerala
		}
	
		if(isset($_POST['Kashmir']))
		{	
			include ('./Kashmir.php');
		}
		include ('./Connection.php');		// This file include connection with database
					
		include ('./tourdata.php');
				
		$result=mysql_query("SELECT Id FROM package_locations where Location= '$pl'");
			
		//find data of tours
		while($row=mysql_fetch_array($result))
		{
			$id = $row['Id'];
		
			$result1=mysql_query("SELECT * FROM tours where Package_Location_Id= '$id'");
			while($row1=mysql_fetch_array($result1))
			{							
				data( $row1['Id'],$row1['Name'],$row1['Days'],$row1['Nights'],$row1['Date']);		//function call from tourdata.php				
			}	
		}
?>
		</div>					
	</body>
</html>