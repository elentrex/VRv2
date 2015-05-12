<?php

echo '<select class="form-control" name="categoria" onChange="producto4(this.value)" required>';
echo '<option value="">Categoria del Producto</option>';

//$var = $_GET['c'];
include("conexion.php");
mysql_query("SET NAMES 'utf8'");

$sql= "SELECT * FROM categoria; ";
$rs= mysql_query($sql);
while ($res = mysql_fetch_array($rs)){
	if($res['id_division'] == $_GET['c']){
		echo "<option value='".$res['id_categoria']."'>".$res['nombre_categoria']."</option>";
	}
}

echo '</select><br>';
?>
