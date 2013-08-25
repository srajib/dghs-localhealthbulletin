<?php 
/*$db_host="10.10.10.5";
$db_name="dghs_hrm";
$db_user="dghshrmDB";
$db_pswd="dghshrmDB@2012";*/
$db_host="localhost";
$db_name="dghs_hrm";
$db_user="root";
$db_pswd="";
$dbh_connection=MYSQL_CONNECT($db_host, $db_user, $db_pswd) OR DIE("Can't connected to database server. Please Contact with WebAdmin.");
@mysql_select_db($db_name) or die("Can't select database. Please Contact with WebAdmin.");
?>