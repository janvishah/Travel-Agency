<?php

function data($Tour_Id,$Days,$Nights)
{
echo "</br>";
			echo "</br>";
			$id = $Tour_Id;																						
			echo "<ul id='margintourid'>";				
				echo <<<_END
					<li class="tourdata head ">						
_END;
					echo "<b>";
						echo "Tour ID:";
						echo  $Tour_Id;
					echo"</b>";
				echo "</li>";
			echo "</ul>";
				
			echo "</br>";
			echo "<ul>";
				echo <<<_END
				<li class="tourdata head">						
_END;
					echo "Days:&nbsp;&nbsp;";
				echo "</li>";
				echo "<li class='data'>";
					echo $Days; 
				echo "</li>";
			echo "</ul>";
			
			echo "<ul>";
				echo <<<_END
				<li class="tourdata head">						
_END;
					echo "Nights:";
				echo "</li>";
				echo "<li class='data'>";
					echo $Nights;
				echo "</li>";
			echo "</ul>";
		
			echo "<ul>";
				echo <<<_END
				<li class="tourdata head">						
_END;
					echo "Places:";
				echo "</li>";
				echo "<li class='data'>";
					$result1=mysql_query("SELECT Place FROM tour_place where Tour_Id=$id");
					include_once ('./connection.php');
					while($row1=mysql_fetch_array($result1))
					{
						Print $row1['Place']; 
		Print "-";
					}
				echo "</li>";
			echo "</ul>";
		
			echo "</br>";
			echo "<ul class='data'>";	
				echo "<b>";
					$pid=$Tour_Id;
					echo "<a href=ViewDetails.php?id=$pid>Tour Details</a>";
				echo "</b>";				
			echo "</ul>";		
}
?>
