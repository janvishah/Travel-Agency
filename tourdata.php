<?php

function data($Id1,$Name,$Days,$Nights,$dates)
{
	echo "</br>";
	echo "</br>";																						
	
	echo "<div id='tourid'>";				
		echo <<<_END
		<span class="tourdata head ">						
_END;
			echo "<b>";
				echo "Name:";
				echo  $Name;
			echo"</b>";
		echo "</span>";
	echo "</div>";
				
	echo "</br>";
	
	echo "<div>";
		echo <<<_END
		<span class="tourdata head">						
_END;
			echo "Days:&nbsp;&nbsp;";
		echo "</span>";
		echo "<span class='data'>";
			echo $Days; 
		echo "</span>";		
	echo "</div>";
	
	echo "<div>";
		echo "<span class='tourdata head'>";
			echo "Nights:";
		echo "</span>";
		echo "<span class='data'>";
			echo $Nights;
		echo "</span>";
	echo "</div>";
			
	echo "<div>";
		echo <<<_END
		<span class="tourdata head">						
_END;
			echo "Date:";
		echo "</span>";
		echo "<span class='data'>";
			echo $dates;
		echo "</span>";
	echo "</div>";
		
	echo "<div>";
		echo <<<_END
		<span class="tourdata head">						
_END;
			echo "Places:";
		echo "</span>";
		echo "<span class='data'>";
		
			include_once ('./connection.php');
			
			$result2=mysql_query("SELECT Place_Id FROM tour_places where Tour_Id=$Id1");
			while($row2=mysql_fetch_array($result2))
			{
				$pla= $row2['Place_Id']; 				
									
				$result3=mysql_query("SELECT Place FROM places where Id=$pla");
			
				while($row3=mysql_fetch_array($result3))
				{
					Print $row3['Place']; 
					Print "-";
				}
			}
			
		echo "</span>";
	echo "</div>";
		
	echo "</br>";
	
	echo "<div class='data'>";	
		echo "<b>";
			$pid=$Id1;
			echo "<a href=ViewDetails.php?id=$pid>Tour Details</a>";
		echo "</b>";				
	echo "</div>";		
}
?>
