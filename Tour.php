<?php
	
echo "<html>";

	
	if(isset($_POST['Kerala']))
	{
		echo "<body>";
		include ('./Kerala.php'); //file include the the heading and 
	}
	
	if(isset($_POST['Kashmir']))
	{
		echo "<body>";
		include ('./Kashmir.php');
	}
			include ('./Connection.php');		
					
			include ('./tourdata.php');
				
			$result=mysql_query("SELECT Id FROM package_location where Location= '$pl'");
				
			//find data of tours
			while($row=mysql_fetch_array($result))
			{
				$id = $row['Id'];
			
				$result1=mysql_query("SELECT * FROM tour where Package_Location_Id= '$id'");

				while($row1=mysql_fetch_array($result1))
				{							
					data( $row1['Id'],$row1['Name'],$row1['Days'],$row1['Nights'],$row1['Date']);		//function call from tourdata.php				
				}	
			}
?>
			</div>
		</body>
</html>