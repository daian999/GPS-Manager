<?php
include "floatheader.php";
$results = $zdb->get_results("SELECT * FROM tracklog LEFT JOIN device_condition ON tracklog.condition_id = device_condition.condition_id WHERE admin_id='".$_SESSION['userid']."' AND staff_id = '".$_REQUEST["staff"]."'");
?>
<table border=1>
<tr>
<th>Date</th><th>Location</th>
</tr>
<?php
if($results) {
	foreach($results as $result) {
		echo "<tr>
		<td>".date('Y-m-d H:i:s',strtotime($result->time_created))."</td>
		<td>".$result->address." ".$result->city." ".$result->state." ".$result->country."</td>
		</tr>";
	}
}
?>  
</table>
