<?php 
session_start(); 
include "dbconnection.php";

if($zdb->query("UPDATE admin SET status = 'pending' WHERE admin_id = '".$_REQUEST["target"]."'"))
{	
	header("location:managerlist.php?event=admdlt");
}
?>