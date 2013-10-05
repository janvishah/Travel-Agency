<?php
	include ('Connection.php');	
	$id=$_GET['id'];
	$result=mysql_query("SELECT Package_Id,Rate,P_Id FROM tour_packages where Tour_Id= $id");
	$page_title = 'Booking';	
	include ('./header.php');
	
	$Title="Bookin Tour";
	include ('./head.inc');
	
		$Title2="Pleas";
		include ('./slide.inc');