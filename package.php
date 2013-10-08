<?php

include('./connection.php');
function package($packageId,$rate,$tourpackageid)
{
			
			
				echo <<<_END
				<li class="packagedata packageid">
_END;
					Print $tourpackageid;						
				echo "</li>";
				$Pd = $packageId;
				$result1=mysql_query("SELECT Type FROM packages where Id= $Pd");
				while ($row1=mysql_fetch_array($result1))
				{
					echo'<li class="packagedata type">';
						Print $row1['Type'];					
					echo "</li>";
				}
				echo <<<_END
				<li class="packagedata rate">
_END;
					Print $rate;					
				echo "</li>";									
}

?>
