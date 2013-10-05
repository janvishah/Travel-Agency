<?php

function data($Tour_Id,$Days,$Nights)
{
	echo "</br>";
	echo "</br>";
	$id = $Tour_Id;																						
	
	echo "<div id='tourid'>";				
		echo <<<_END
		<span class="tourdata head ">						
_END;
			echo "<b>";
				echo "Tour ID:";
				echo  $Tour_Id;
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
		echo <<<_END
		<span class="tourdata head">						
_END;
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
			echo "Places:";
		echo "</span>";
		echo "<span class='data'>";
			$result1=mysql_query("SELECT Place FROM tour_place where Tour_Id=$id");
			include_once ('./connection.php');
			while($row1=mysql_fetch_array($result1))
			{
				Print $row1['Place']; 
				Print "-";
			}
		echo "</span>";
	echo "</div>";
		
	echo "</br>";
	
	echo "<div class='data'>";	
		echo "<b>";
			$pid=$Tour_Id;
			echo "<a href=ViewDetails.php?id=$pid>Tour Details</a>";
		echo "</b>";				
	echo "</div>";		
}
?>
