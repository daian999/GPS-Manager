<?php 
session_start(); 
include "dbconnection.php";

if (isset($_REQUEST['first_name']) && isset($_REQUEST['last_name']) && isset($_REQUEST['phone_no']) && isset($_REQUEST['device_no'])){

	$first_name  = $_REQUEST['first_name'];
	$last_name   = $_REQUEST['last_name'];
	$phone_no 	 = $_REQUEST['phone_no'];
	$device_no 	 = $_REQUEST['device_no'];
	
	if($zdb->query("INSERT INTO staff (first_name, last_name, phone_no, device_no) VALUE ('$first_name', '$last_name', '$phone_no', '$device_no')"))
	{	$newid = mysql_insert_id();
		$zdb->query("INSERT INTO relationship (admin_id, staff_id) VALUE ('".$_SESSION['userid']."', '$newid')");
		header("location:main.php");
	}
}
?>