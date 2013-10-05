<?php
	
	if(isset($_POST['Kerala']))
		{
			$page_title = 'Kerala';	
			include ('./header.php');
			$pl = "Kerala";
			$Title="Kerala Holiday Packages";
			include ('./head.inc');
			$Title2="Kerala";
			include ('./slide.inc');
		}
?>
				<div id=pid>				
					Kerala regionally referred to as Keralam is a state in the south-west region of India on the Malabar coast. 
					It was formed on 1 November 1956 as per the States Reorganisation Act by combining various speaking regions. 
					Spread over 38,863 km2 (15,005 sq mi) it is bordered by Karnataka to the north and north east, Tamil Nadu to the east and south, and the Laccadive Sea to the west. 
					With 33,387,677 inhabitants as per the 2011 census, Kerala is the twelfth largest state by population and is divided into 14 districts.
					Malayalam is the most widely spoken and official language of the state. 
					The state capital is Thiruvananthapuram, other major cities include Kochi, Kozhikode, Kollam and Thrissur.					
				</div>
<?php
	include ('Connection.php');				
	$result=mysql_query("SELECT * FROM tour where Tour_Name= '$pl'");
		include ('./tourdata.php');
		
		while($row=mysql_fetch_array($result))
		{				
			data($row['Tour_Id'],$row['Days'],$row['Nights']);						
		}			
		echo "</div>";
		echo "</body>";
	echo"</html>";
?>
