function validateUsername()
{
	var username = trim(document.getElementById('username').value);
	if (username.length == 0)
	return "Error username is length zero\n"
	else return "";
}
function validatePassword()
{
	var password = trim(document.getElementById('password').value);
	if (password.length == 0)
	return "Error password is length zero\n"
	else return "";
}

function isNotEmptyValue(value, name)
{
	if (value == null || value == "")
	{
		alert("Error " + name + " must be given a value");
		return false;
	}
	else return true;
}

function checkLength(value, min, max)
{
	if (value.length >= min && value.length <= max) 
	{
		return true;
	}
	else
	{
		alert("Please enter between " +min+ " and " +max+ " characters");
		return false;
	}
}
	
function trim(str)
{
	return str.replace(/^\s+|\s+$/g, '');
}