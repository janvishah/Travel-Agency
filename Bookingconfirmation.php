<?php
	include('./connection.php');
	
if (isset($_POST['Name'])) 
	$name = $_POST['Name'];		
	
if (isset($_POST['Address'])) 
	$address = $_POST['Address'];

if (isset($_POST['Ph_No'])) 
	$ph_no = $_POST['Ph_No'];

if (isset($_POST['Email'])) 
	$email = $_POST['Email'];

	$query="INSERT into travellers VALUES"."(NULL,'$name','$address','$ph_no','$email')";
	 if (!mysql_query($query, $con))
          echo "INSERT failed: $query<br />" .mysql_error() . "<br /><br />";
	
	$result = mysql_query("select Id from travellers where Email='$email'");
	$row=mysql_fetch_array($result);
	$travellerid = $row['Id'];	

	$id=$_GET['id']; 
	$currentDate = date("Y-m-d");
	$query1="INSERT into bookings VALUES"."(NULL,'$id','$travellerid','$currentDate')";
	
		if (!mysql_query($query1, $con))
          echo "INSERT failed: $query1<br />" .mysql_error() . "<br /><br />";	
echo <<<_END
<html>
	<body>
		<div>
			<span>
				Name:
			</span>
			<span>
_END;
				Print $name;
			echo <<<_END
			</span>
		</div>
		<div>
			<span>
				phno:
			</span>
			<span>
_END;
				Print $ph_no;
			echo <<<_END
			</span>
		</div>
		<div>
			<span>
				Address:
			</span>
			<span>
_END;
				Print $address;
			echo <<<_END
			</span>
		</div>
		<div>
			<span>
				Email:
			</span>
			<span>
_END;
				Print $email;
			echo <<<_END
			</span>
		</div>
	</body>
</html>
_END;
?>