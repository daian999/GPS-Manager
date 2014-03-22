<?php 
include "floatheader.php";
?>
<form method="POST" action="addstaff.php">
<table>
<tr>
<td>First Name:</td><td><input type="text" name="first_name" id="first_name" value=""></td> 
</tr>
<tr>
<td>Last Name:</td><td><input type="text" name="last_name" id="last_name" value=""></td> 
</tr>
<tr>
<td>Phone Number:</td><td><input type="text" name="phone_no" id="phone_no" value=""></td> 
</tr>
<tr>
<td>Device Number:</td><td><input type="text" name="device_no" id="device_no" value=""></td> 
</tr>
<tr>
<td colspan="2" align="right"><input type="reset" name="reset" value="Reset"><input type="submit" name="addnew" value="Submit"></td>
</tr>
</table>
</form>