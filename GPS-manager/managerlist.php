<?php 
include "floatheader.php";

$results = $zdb->get_results("SELECT admin_id, first_name, last_name, email, phone_no, country, state, city, address FROM admin WHERE status != 'pending'");

if(isset($_REQUEST['event'])){

	if($_REQUEST['event']=="addnew") {
		echo '<script type="text/javascript">alert("New manager added."); </script>';
	} else if($_REQUEST['event']=="updated") {
		echo '<script type="text/javascript">alert("Manager profile updated."); </script>';
	} else if($_REQUEST['event']=="admdlt") {
		echo '<script type="text/javascript">alert("Manager delete complete."); </script>';
	}
}

?>
<table border=1>
  <tr>
	<th>Manager Name:</th>
	<th>Email:</th>
	<th>Phone No:</th>
	<th>Address:</th>
	<th>Action</th>
  </tr>
<?php
if($results) {
	foreach($results as $result) {
		echo "<tr>
		<td>".$result->last_name." ".$result->first_name."</td>
		<td>".$result->email."</td>
		<td>".$result->phone_no."</td>
		<td>".$result->address." ".$result->city." ".$result->state." ".$result->country."</td>
		<td>
		<a href='managermodify.php?target=".$result->admin_id."'><input type='button' name='modify' value='Modify'></a>
		<a href='managerdelete.php?target=".$result->admin_id."'><input type='button' name='delete' value='Delete'></a></td>
		</tr>";
	}
}
?>  
  <tr>
	<td colspan="5"><a href="newmanager.php"><input type="button" name="add" value="add +"></a></td>
  </tr>
</table>