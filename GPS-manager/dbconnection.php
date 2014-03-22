<?php
include "libs/ez_sql_core.php";
include "libs/ez_sql_mysql.php";

$conn_hostname = "localhost";
$conn_database = "gps_manager";
$conn_username = "root";
$conn_password = "";
//$conn_connection = mysql_connect($conn_hostname , $conn_username , $conn_password ) or trigger_error(mysql_error(),E_USER_ERROR); 
//mysql_select_db($conn_database, $conn_connection);

$zdb = new ezSQL_mysql($conn_username,$conn_password,$conn_database,$conn_hostname);

?>