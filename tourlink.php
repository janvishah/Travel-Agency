<?php
$id = $_GET['id'];
?>
<div class="tourid">		
	<li>
		<a href="Hotels.php">Hotels</a>
	</li>
	
	<li>
		<a href="IncludeExclude.php" >Include/Exclude</a>
	</li>
	
	<li>
<?php
		echo "<a href=BookNow.php?id=$id>Book Now</a>"
?>
	</li>
</div>
