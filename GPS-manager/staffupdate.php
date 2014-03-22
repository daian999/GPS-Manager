<?php 
session_start(); 
include "dbconnection.php";

if (isset($_REQUEST['first_name']) && isset($_REQUEST['last_name']) && isset($_REQUEST['phone_no']) && isset($_REQUEST['device_no'])){

	$first_name  = $_REQUEST['first_name'];
	$last_name   = $_REQUEST['last_name'];
	$phone_no 	 = $_REQUEST['phone_no'];
	$device_no 	 = $_REQUEST['device_no'];
	
	if($zdb->query("UPDATE staff SET first_name = '$first_name', last_name = '$last_name', phone_no = '$phone_no', device_no = '$device_no', time_last_modify = now(), last_modify_by = '".$_SESSION["userid"]."' WHERE staff_id = '".$_REQUEST["staff"]."'"))
	{	
		header("location:main.php?event=stfupd");
	}
}
?>