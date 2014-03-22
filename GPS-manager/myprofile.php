<?php 
include "floatheader.php";

$result = $zdb->get_row("SELECT * FROM admin WHERE admin_id='".$_SESSION["userid"]."'");
?>
<form id="adminAdd" name="adminAdd" method="POST" action="updateprofile.php"  onsubmit="return validation()">
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
<td colspan="2" align="right"><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>