function validate()
	{
		var name=document.forms["form1"]["Name"].value;
		var add=document.forms["form1"]["Address"].value;
		var ph=document.forms["form1"]["Ph_No"].value;
		var email=document.forms["form1"]["Email"].value;
		if (name==null || name=="")
		{
			alert("Name must be filled out");
			return false;
		}
		if (add==null || add=="")
		{
			alert("address must be filled out");
			return false;
		}
		if (ph==null || ph=="")
		{
			alert("phone Number must be filled out");
			return false;
		}
		if (email==null || email=="")
		{
			alert("email must be filled out");
			return false;
		}
		var reg = /^[A-Z a-z]+$/
		if (reg.test(name))
		{
			return true; 
		}
		else
		{
			return false;
		}
	}