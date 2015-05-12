<?php

include("conexion.php");

$sql= "SELECT * FROM marca; ";
$rs= mysql_query($sql);
while ($res = mysql_fetch_array($rs)){
	echo "<option value='".$res['id_marca']."'>".$res['nombre_marca']."</option>";
}

echo '</select>';
?>

