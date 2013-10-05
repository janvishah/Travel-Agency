<?php
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect: '.mysql_error());
		}
		mysql_select_db("travel_agency",$con);
?>