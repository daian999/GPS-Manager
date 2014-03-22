<?php
session_start(); 
include "dbconnection.php";

if (isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['position_id']) && isset($_REQUEST['email'])&& $_SESSION['userid']=='1'){
	$username 	 = $_REQUEST['username'];
	$password 	 = $_REQUEST['password'];
	$position_id = $_REQUEST['position_id'];
	$first_name  = $_REQUEST['first_name'];
	$last_name   = $_REQUEST['last_name'];
	$email 	 	 = $_REQUEST['email'];
	$phone_no 	 = $_REQUEST['phone_no'];
	$country 	 = $_REQUEST['country'];
	$state 		 = $_REQUEST['state'];
	$city		 = $_REQUEST['city'];
	$address	 = $_REQUEST['address'];
	
	if($zdb->query("INSERT INTO admin (username, password, position_id, first_name, last_name, email, phone_no, country, state, city, address) VALUE ('$username', '$password', '$position_id', '$first_name', '$last_name', '$email', '$phone_no', '$country', '$state', '$city', '$address')"))
	{	header("location:managerlist.php?event=addnew");	}
}
?>