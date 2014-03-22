<?php 
include "floatheader.php";

$result = $zdb->get_row("SELECT * FROM staff WHERE staff_id='".$_REQUEST["staff"]."'");

?>
<form method="POST" action="staffupdate.php?staff=<?php echo $_REQUEST["staff"];?>">
<table>
<tr>
<td>First Name:</td><td><input type="text" name="first_name" id="first_name" value="<?php echo $result->first_name; ?>"></td> 
</tr>
<tr>
<td>Last Name:</td><td><input type="text" name="last_name" id="last_name" value="<?php echo $result->last_name; ?>"></td> 
</tr>
<tr>
<td>Phone Number:</td><td><input type="text" name="phone_no" id="phone_no" value="<?php echo $result->phone_no; ?>"></td> 
</tr>
<tr>
<td>Device Number:</td><td><input type="text" name="device_no" id="device_no" value="<?php echo $result->device_no; ?>"></td> 
</tr>
<tr>
<td colspan="2" align="right"><a href="main.php"><input type="button" name="back" value="Back"></a><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>