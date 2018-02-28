function validateLogForm()
{
	var uname=document.formReg.name.value;
	var pwd=document.formReg.passwrd.value;
	if(uname="")
	{
		alert("fill user-name");
		return false;
	}
	if(pwd=="")
	{
		alert("Password should not be empty");
		return false;
	}
}
