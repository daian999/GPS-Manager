<?php 
include "floatheader.php";
if(isset($_REQUEST['error'])){
	if($_REQUEST['error']=="1") {
		echo '<script type="text/javascript">alert("Your old password is not correct."); </script>';
	} else if($_REQUEST['error']=="2") {
		echo '<script type="text/javascript">alert("Re-type new password is not match with new password."); </script>';
	} else {
		echo '<script type="text/javascript">alert("Unknow Error."); </script>';
	}	
}
?>
<script language="javascript">

function validation() {
	if (document.chgpwd.newpwd.value != document.chgpwd.renewpwd.value) {
		alert(" Re-type new password is not match with new password.");
		document.chgpwd.renewpwd.focus();
		return false}
	return true;
}

</script>
<form name="chgpwd" id="chgpwd" method="POST" action="passwordupdate.php" onsubmit="return validation()">
<table border=1>
<tr>
<td>Old Password:</td><td><input type="password" name="oldpwd"></td>
</tr>
<tr>
<td>New Password:</td><td><input type="password" name="newpwd" id="newpwd"></td>
</tr>
<tr>
<td>Re-type New Password:</td><td><input type="password" name="renewpwd" id="renewpwd" onblur="validation()"></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" name="update" value="Submit"></td>
</tr>
</table>
</form>