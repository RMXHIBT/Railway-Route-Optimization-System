function p1_val_san()
{

	var a = document.forms["usl"]["ID"];
	var b = document.forms["usl"]["Pass"];


	if(a.value == " " || a.value != 6)
	{
		window.alert("Invalid ID");
		a.focus();

		return false;
	}

	else if(b.value == " ")
	{
		window.alert("Please enter password");

		return false;
	}

	else
	{
		return true;
	}

	return true;
}