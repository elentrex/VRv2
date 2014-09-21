<?php

echo '<select class="form-control" name="ciudad">';
echo '<option value="">Ciudad</option>';

//$var = $_GET['c'];
include("conexion.php");
mysql_query("SET NAMES 'utf8'");

$sql= "SELECT * FROM ciudad";
$rs= mysql_query($sql);
while ($res = mysql_fetch_array($rs)){
	//if($res['id_categoria'] == $_GET['c']){
		echo "<option value='".$res['id_ciudad']."'>".$res['nombre_ciu']."</option>";
	//}
}

echo '</select><br>';
?>

