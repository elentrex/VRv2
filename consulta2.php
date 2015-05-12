<?php

echo '<select class="form-control" name="division" onChange="producto3(this.value)" required>';
echo '<option value="">División del Producto</option>';

//$var = $_GET['c'];
include("conexion.php");
mysql_query("SET NAMES 'utf8'");

$sql= "SELECT * FROM division; ";
$rs= mysql_query($sql);
while ($res = mysql_fetch_array($rs)){
	if($res['id_modelo'] == $_GET['c']){
		echo "<option value='".$res['id_division']."'>".$res['nombre_division']."</option>";
	}
}

echo '</select><br>';
?>