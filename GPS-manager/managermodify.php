<?php 
include "floatheader.php";

$result = $zdb->get_row("SELECT first_name, last_name, email, phone_no, country, state, city, address FROM admin WHERE admin_id = '".$_REQUEST['target']."'");
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

<form id="modifyadmin" name="modifyadmin" method="POST" action="updatemanager.php?target=<?php echo $_REQUEST['target']; ?>"  onsubmit="return validation()">
<table>
<tr>
<td>first_name:</td>
<td><input type="text" id="first_name" name="first_name" value="<?php echo $result->first_name;?>"></td>
</tr>
<tr>
<td>last_name:</td>
<td><input type="text" id="last_name" name="last_name" value="<?php echo $result->last_name;?>"></td>
</tr>
<tr>
<td>email:</td>
<td><input type="text" id="email" name="email" value="<?php echo $result->email;?>"></td>
</tr>
<tr>
<td>phone_no:</td>
<td><input type="text" id="phone_no" name="phone_no" value="<?php echo $result->phone_no;?>"></td>
</tr>
<tr>
<td>country:</td>
<td><input type="text" id="country" name="country" value="<?php echo $result->country;?>"></td>
</tr>
<tr>
<td>state:</td>
<td><input type="text" id="state" name="state" value="<?php echo $result->state;?>"></td>
</tr>
<tr>
<td>city:</td>
<td><input type="text" id="city" name="city" value="<?php echo $result->city;?>"></td>
</tr>
<tr>
<td>address:</td>
<td><input type="text" id="address" name="address" value="<?php echo $result->address;?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>

</body>
</html>