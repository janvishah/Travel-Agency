<?php
function detail($Day,$Place,$Text)
{
	echo "</br>";
	echo <<<_END
		<div class="tourid head" > 
_END;
				echo "<b>";
				echo "<span >";
					echo "Day &nbsp;";					
					Print $Day;					
					Print '::';
				echo "</span>";
				echo "<span>";		
					Print $Place;					
				echo "</span>";
				echo "</b>";
	echo "</div >";
			
			echo <<<_END
			<div class="tourid text">			
_END;
				echo "<span id='pid'>";	
					Print $Text;
				echo "</span>";
			echo "</div>";			
}
?>