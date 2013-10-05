<?php
function detail($Day)
{
	echo "</br>";
	echo <<<_END
		<div class="tourid head" > 
_END;
			echo "<b>";
				echo "<span >";
					echo "Day &nbsp;";					
					Print $Day.":";									
				echo "</span>";				
			echo "</b>";
		echo "</div >";
}

function daydetail($Text)
{			
		echo <<<_END
		<div class="tourid text">			
_END;
			echo "<span id='pid'>";	
				Print $Text;
			echo "</span>";
		echo "</div>";	
}		

?>