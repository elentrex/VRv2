<?php

echo '<select class="form-control" name="estado" required>';
echo '<option value="">Estado</option>';

//$var = $_GET['c'];
include("conexion.php");
mysql_query("SET NAMES 'utf8'");

$sql= "SELECT * FROM estado";
$rs= mysql_query($sql);
while ($res = mysql_fetch_array($rs)){
	//if($res['id_categoria'] == $_GET['c']){
		echo "<option value='".$res['id_estado']."'>".$res['nombre_estado']."</option>";
	//}
}

echo '</select><br>';
?>

