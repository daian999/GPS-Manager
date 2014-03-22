<?php
session_start(); 
include "dbconnection.php";

if (isset($_REQUEST['username']) && isset($_REQUEST['password'])){
	$result = $zdb->get_row("SELECT admin_id, first_name, last_name FROM Admin WHERE username = '$_REQUEST[username]' AND password = '$_REQUEST[password]'");
	if(!empty($result))
	{
		$_SESSION['username'] = $result->last_name." ".$result->first_name;
		$_SESSION['userid'] = $result->admin_id;
		header("location:main.php");
	}	
	else 
	{
		echo '<script type="text/javascript">alert("Your username or password is not correct."); </script>';
	}
}
?>
<html>
<head>

<script language="javascript">

function validation() {
	if (document.loginForm.username.value.length ==0) {
		alert(" Please Enter Your Username!");
		document.loginForm.username.focus();
		return false}
	if (document.loginForm.password.value.length ==0) {
		alert(" Please Enter Password!");
		document.loginForm.password.focus();
		return false}
	return true;
}

</script>

</head>
<body>

<form id="loginForm" name="loginForm" method="POST" action="login.php"  onsubmit="return validation()">
<table>
<tr>
<td>Username:</td>
<td><input type="text" id="username" name="username"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="password" name="password"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="login" value="Login"><input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>

</body>
</html>