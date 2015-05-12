<?php

/*********************************
***********LOCAL**************/ 

/*$db_host="localhost";
$db_username="root";
$db_password="";
$db_database="vr";*/

/*********************************
***********SERVIDOR**************/ 

$db_host="localhost";
$db_username="venezolr_vr_usu";
$db_password="Pass@2015";
$db_database="venezolr_vr";


$conexion=mysql_connect($db_host, $db_username, $db_password);
if(!$conexion)
	die(mysql_error());

$db_select=mysql_select_db($db_database);
if(!$db_select)
	die(mysql_error());

?>