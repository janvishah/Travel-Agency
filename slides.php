<?php
function slides()
{
	if($page_title == 'home')
	{
		echo '<script src="js/Home.js" type="text/javascript"></script>';
	}
	if($page_title == 'Indian Tour')
	{
		echo '<script src="js/Indian Tour.js" type="text/javascript"></script>';
	}
	if($page_title == 'Kerala')
	{
		echo '<script src="js/Kerala.js" type="text/javascript"></script>';
	}
}
?>