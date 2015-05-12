<?php

echo '<select class="form-control" name="modelo" onChange="producto2(this.value)" required>';
echo '<option value="">Modelo del Vehículo</option>';
//$var = $_GET['c'];
include("conexion.php");
mysql_query("SET NAMES 'utf8'");

$sql= "SELECT * FROM modelo; ";
$rs= mysql_query($sql);
while ($res = mysql_fetch_array($rs)){
	if($res['id_marca'] ==  $_GET['c']){
		echo "<option value='".$res['id_modelo']."'>".$res['Nombre_modelo']."</option>";
	}
}

echo '</select><br>';
?>

