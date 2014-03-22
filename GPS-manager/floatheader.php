<?php 
session_start(); 
include "dbconnection.php";
?>
<div style="float:right">
<?php echo "Welcome <font style='color:red'>".$_SESSION['username']."</font>"; ?>&nbsp<a href="logout.php">logout</a>
</div>
</br>
<a href="main.php"><input type="button" name="main" value="main"></a>
<a href="gpsmap.php"><input type="button" name="map" value="map"></a>
<a href="change_password.php"><input type="button" name="chgpwd" value="change password"></a>
<a href="myprofile.php"><input type="button" name="profile" value="my profile"></a>
<?php 
if($_SESSION['userid'] == "1"){
	echo '<a href="managerlist.php"><input type="button" name="Manager" value="Manager"></a>';
}
?>
</br>