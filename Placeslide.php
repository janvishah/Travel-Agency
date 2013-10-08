<?php
if($row3['Location']=='Kerala')
{	
	echo "<script src='js/Kerala.js' type='text/javascript'></script>";
	$url = "image/Kerala/pr1.jpg"; 						//Used by Slide.php for url of image
	$subheading="Indian Tourism";								//Used by Slide.php for sub title
	include ('./slide.php');
}
if($row3['Location']=='Kashmir')
{	
	echo "<script src='js/Kashmir.js' type='text/javascript'></script>";
	$url = "image/Kashmir/pr1.jpg"; 						//Used by Slide.php for url of image
	$subheading="Indian Tourism";								//Used by Slide.php for sub title
	include ('./slide.php');
}
?>