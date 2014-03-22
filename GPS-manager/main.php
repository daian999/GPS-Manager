<?php 
include "floatheader.php";

if(isset($_REQUEST['event'])){
	if($_REQUEST['event']=="chpwd") {
		echo '<script type="text/javascript">alert("Your password have change."); </script>';
	} else if($_REQUEST['event']=="stfupd") {
		echo '<script type="text/javascript">alert("Staff info have complete updated."); </script>';
	} else if($_REQUEST['event']=="updated") {
		echo '<script type="text/javascript">alert("Your profile info have complete updated."); </script>';
	} else if($_REQUEST['event']=="stfdlt") {
		echo '<script type="text/javascript">alert("Staff delete complete."); </script>';
	}
}
 
$results = $zdb->get_results("SELECT staff.staff_id, first_name, last_name, phone_no, device_no FROM relationship LEFT JOIN staff ON relationship.staff_id = staff.staff_id WHERE relationship.admin_id = '".$_SESSION['userid']."' AND status != 'pending'");

?>
<table border=1>
  <tr>
	<th>Staff Name:</th>
	<th>Phone No:</th>
	<th>Device No:</th>
	<th>Action</th>
  </tr>
<?php
if($results) {
	foreach($results as $result) {
		echo "<tr>
		<td>".$result->last_name." ".$result->first_name."</td>
		<td>".$result->phone_no."</td>
		<td>".$result->device_no."</td>
		<td>
		<a href='staffrecord.php?staff=".$result->staff_id."'><input type='button' name='viewrecord' value='View'></a>
		<a href='staffmodify.php?staff=".$result->staff_id."'><input type='button' name='modify' value='Modify'></a>
		<a href='staffdelete.php?staff=".$result->staff_id."'><input type='button' name='delete' value='Delete'></a></td>
		</tr>";
	}
}
?>  
  <tr>
	<td colspan="4"><a href="newstaff.php"><input type="button" name="add" value="add +"></a></td>
  </tr>
</table>