<?php 

include ("conexion.php");

function consulta(){
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$division=$_POST['division'];
$categoria=$_POST['categoria'];
$ciudad=$_POST['ciudad'];

/*Consulta para mostrar la imagen de la casa de repuesto
$sql= "SELECT P.id_producto FROM producto_tienda PT
JOIN producto P ON P.id_producto = PT.id_producto
JOIN tienda T ON T.id_tienda = PT.id_tienda
JOIN logo L ON L.id_logo = T.id_logo
JOIN ciudad C ON C.id_ciudad = T.id_ciudad
WHERE id_marca =".$marca."
AND id_modelo=".$modelo." AND  id_division=".$division." AND id_categoria=".$categoria."";
$rs= mysql_query($sql);
$res = mysql_fetch_array($rs);*/

//Consulta para mostrar la imagen de la casa de repuesto
$sql= "SELECT id_producto FROM producto
WHERE id_marca =".$marca."
AND id_modelo=".$modelo." AND  id_division=".$division." AND id_categoria=".$categoria."";
$rs= mysql_query($sql);
$res = mysql_fetch_array($rs);
return $res;
}

$valor=consulta();
function consulta2(){
//Consulta para mostrar el producto
$sql1= "SELECT id_producto, nombre_marca, Nombre_modelo, nombre_division, nombre_categoria
FROM producto P
JOIN marca M ON M.id_marca = P.id_marca
JOIN modelo MO ON MO.id_modelo = P.id_modelo
JOIN division D ON D.id_division = P.id_division
JOIN categoria C ON C.id_categoria = P.id_categoria
WHERE id_producto=".$valor."";//$res[id_producto]
$rs1= mysql_query($sql1);
$res1 = mysql_fetch_array($rs1);
}

function consulta3(){
//Consulta para mostrar la imagen del producto
$sql2= "SELECT img_producto FROM img_producto
WHERE id_producto=".$res['id_producto']."";
$rs2= mysql_query($sql2);
$res2 = mysql_fetch_array($rs2);

}


?>