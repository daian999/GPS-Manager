<?php 
session_start(); 
include "dbconnection.php";

if($zdb->query("UPDATE staff SET status = 'pending' WHERE staff_id = '".$_REQUEST["staff"]."'"))
{	
	header("location:main.php?event=stfdlt");
}
?>