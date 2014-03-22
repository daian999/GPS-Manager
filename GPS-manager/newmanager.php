<?php 
include "floatheader.php";
?>
<html>
<head>

<script>
function validate(){
	if(document.getElementById('email').value == ""){
		alert("Please enter your Email Address.");
		document.getElementById('email').focus();
		return false;
	}
	
	if(document.getElementById('email').value.match(/.*?(@).+\..+/g)){ 
	} else {
		alert("Invalid Email Address format.");
		document.getElementById('email').focus();
		return false;
	}

	if(document.getElementById('password').value == ""){
		alert("Please enter your Password.");
		document.getElementById('pwd').focus();
		return false;
	}
	
	if(document.getElementById('password').value.length < 8){
		alert("Password is too short.");
		document.getElementById('pwd').focus();
		return false;
	}
	
	$match = document.getElementById('repwd').value;
	if(document.getElementById('password').value != $match){
		alert("Password not match.");
		document.getElementById('repwd').value="";
		document.getElementById('repwd').focus();
		return false;
	}
	
	if(document.getElementById('first_name').value == ""){
		alert("Please enter your First Name.");
		document.getElementById('first_name').focus();
		return false;
	}
	var answer = confirm("Ready to create new manager now?")
	if (answer){
		return true;
	} else { 
		return false;
	}

}


</script>


</head>
<body>

<form id="adminAdd" name="adminAdd" method="POST" action="addmanager.php"  onsubmit="return validation()">
<table>
<tr>
<td>Username:</td>
<td><input type="text" id="username" name="username">&nbsp;<span id="usrcheck"></span></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="password" name="password"></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" id="repwd" name="repwd"></td>
</tr>
<tr>
<td>position_id:</td>
<td><input type="text" id="position_id" name="position_id"></td>
</tr>
<tr>
<td>first_name:</td>
<td><input type="text" id="first_name" name="first_name"></td>
</tr>
<tr>
<td>last_name:</td>
<td><input type="text" id="last_name" name="last_name"></td>
</tr>
<tr>
<td>email:</td>
<td><input type="text" id="email" name="email"></td>
</tr>
<tr>
<td>phone_no:</td>
<td><input type="text" id="phone_no" name="phone_no"></td>
</tr>
<tr>
<td>country:</td>
<td><input type="text" id="country" name="country"></td>
</tr>
<tr>
<td>state:</td>
<td><input type="text" id="state" name="state"></td>
</tr>
<tr>
<td>city:</td>
<td><input type="text" id="city" name="city"></td>
</tr>
<tr>
<td>address:</td>
<td><input type="text" id="address" name="address"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>

</body>
</html>