<?php
session_start(); 
include "dbconnection.php";

if ( isset($_REQUEST['email'])&& isset($_REQUEST['target'])){

	$first_name  = $_REQUEST['first_name'];
	$last_name   = $_REQUEST['last_name'];
	$email 	 	 = $_REQUEST['email'];
	$phone_no 	 = $_REQUEST['phone_no'];
	$country 	 = $_REQUEST['country'];
	$state 		 = $_REQUEST['state'];
	$city		 = $_REQUEST['city'];
	$address	 = $_REQUEST['address'];
	
	if($zdb->query("UPDATE admin SET first_name='$first_name', last_name='$last_name', email='$email', phone_no='$phone_no', country='$country', state='$state', city='$city', address='$address' WHERE admin_id = '".$_REQUEST['target']."'"))
	{	header("location:managerlist.php?event=updated");	}
}
?>