<?php 
session_start(); 
include "dbconnection.php";

if (isset($_REQUEST['oldpwd']) && isset($_REQUEST['newpwd']) && isset($_REQUEST['renewpwd'])){

	$oldpwd  = $_REQUEST['oldpwd'];
	$newpwd   = $_REQUEST['newpwd'];
	$renewpwd 	 = $_REQUEST['renewpwd'];
	
	if($zdb->get_row("SELECT admin_id FROM admin WHERE admin_id = '".$_SESSION["userid"]."' AND password='$oldpwd'")){
		if($renewpwd == $newpwd){	
			if($zdb->query("UPDATE admin SET password='$newpwd', time_last_modify = now(), last_modify_by = '".$_SESSION["userid"]."' WHERE admin_id = '".$_SESSION["userid"]."' AND password='$oldpwd'"))
			{	
				header("location:main.php?event=chpwd");
			}
		} else {
			header("location:change_password.php?error=2");
		}
	} else {
		header("location:change_password.php?error=1");
	}
}
?>