<?php

$db_host="localhost";//Nombre del Servidor
$db_username="root";//Nombre del usuario
$db_password="";//Contraseña de la BD
$db_database="vr";//Nombre de la BD


$conexion=mysql_connect($db_host, $db_username, $db_password);
if(!$conexion)
	die(mysql_error());

$db_select=mysql_select_db($db_database);
if(!$db_select)
	die(mysql_error());

?>