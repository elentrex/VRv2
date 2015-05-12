<?php 

include ("conexion.php");
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$division=$_POST['division'];
$categoria=$_POST['categoria'];
$estado=$_POST['estado'];


//Consulta de producto
$sql= "SELECT id_producto FROM producto
WHERE id_marca =".$marca."
AND id_modelo=".$modelo." AND  id_division=".$division." AND id_categoria=".$categoria."";
$rs= mysql_query($sql);

if (mysql_num_rows($rs) != 0) {
  
  $res = mysql_fetch_assoc($rs);
  
  //Consulta para mostrar el producto
  $sql1= "SELECT id_producto, nombre_marca, Nombre_modelo, nombre_division, nombre_categoria
  FROM producto P
  JOIN marca M ON M.id_marca = P.id_marca
  JOIN modelo MO ON MO.id_modelo = P.id_modelo
  JOIN division D ON D.id_division = P.id_division
  JOIN categoria C ON C.id_categoria = P.id_categoria
  WHERE id_producto=".$res['id_producto']."";
  $rs1= mysql_query($sql1);
  
  $res1 = mysql_fetch_assoc($rs1);
  
  //Consulta para mostrar la imagen del producto
  $sql2= "SELECT img_producto FROM img_producto
  WHERE id_producto=".$res['id_producto']."";
  $rs2= mysql_query($sql2);
  
  $res2 = mysql_fetch_assoc($rs2);
  
  //Consulta para las tiendas
  $sql3= "SELECT nom_tienda, logo_small, logo_grande, nombre_estado, nombre_ciudad 
  FROM producto_tienda PT
  JOIN tienda T ON T.id_tienda = PT.id_tienda
  JOIN logo L ON L.id_logo = T.id_logo
  JOIN estado E ON E.id_estado = T.id_estado
  JOIN ciudad C ON C.id_ciudad = T.id_ciudad
  WHERE PT.id_producto=".$res['id_producto']." AND T.id_tienda=PT.id_tienda AND T.id_estado=".$estado."";
  $rs3= mysql_query($sql3) ;
  
  $res3 = mysql_fetch_assoc($rs3);
  
  //Consulta para la imagen de la tienda
  $sql4= "SELECT nom_tienda, logo_small, logo_grande, nombre_estado, nombre_ciudad
  FROM producto_tienda PT
  JOIN tienda T ON T.id_tienda = PT.id_tienda
  JOIN logo L ON L.id_logo = T.id_logo
  JOIN estado E ON E.id_estado = T.id_estado
  JOIN ciudad C ON C.id_ciudad = T.id_ciudad
  WHERE PT.id_producto=".$res['id_producto']."";
  $rs4= mysql_query($sql4) ;
  
  $res4 = mysql_fetch_assoc($rs4);
  
} else {
  header('Location: pagina-error.php');
}

?>

