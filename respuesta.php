<?php
include ("conexion.php");

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

//Consulta para mostrar el producto
$sql1= "SELECT id_producto, nombre_marca, Nombre_modelo, nombre_division, nombre_categoria
FROM producto P
JOIN marca M ON M.id_marca = P.id_marca
JOIN modelo MO ON MO.id_modelo = P.id_modelo
JOIN division D ON D.id_division = P.id_division
JOIN categoria C ON C.id_categoria = P.id_categoria
WHERE id_producto=".$res['id_producto']."";
$rs1= mysql_query($sql1);
$res1 = mysql_fetch_array($rs1);

//Consulta para mostrar la imagen del producto
$sql2= "SELECT img_producto FROM img_producto
WHERE id_producto=".$res['id_producto']."";
$rs2= mysql_query($sql2);
$res2 = mysql_fetch_array($rs2);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include 'inc/meta.php';?>
    <meta name="title" content="Repuestos para Vehículos" />
    <title>Repuestos para Vehículos</title>
    <?php include 'inc/header_common.php';?>
  </head>

  <body>
    <!-- Wrap all page content here -->
    <div id="wrap">
      <?php include 'inc/barra_menu.php'; ?>

      <!-- Begin page content -->
      <div class="container">
        <div class="row">
        <div class="page-header text-center">
            <h1>Casas de Repuesto</h1>
        </div><!--Fin de page-header-->

        <div class="row"><!--Inicio Row1-->
          <div class="col-sm-4">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Casas de Repuesto Maracay</button><br><br>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header"><!--Cabecera-->
                        <button type="button" class="close" data-dismissw="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center" id="myModalLabel">Repuestos en Maracay</h4>
                      </div>
                      <div class="modal-body row"><!--Cuerpo-->
                        <div class="col-sm-6">
                            <span class="img"><img class="img-thumbnail" src="img/Toyota-logo2.jpg"></span>
                        </div>
                        <div class="col-sm-6">                       
                              <div class="modal-header"><h3>Toyota</h3></div>
                              <p>Dirección: Av Bolivar, Maracay</p>
                              <p>toyota_maracay@hotmail.com</p>
                              <a href="http://www.toyota.com.ve" target="_blank">www.toyota.com.ve</a>                         
                        </div>


                      </div>
                      <div class="modal-footer"><!--Botones-->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button> 
                      </div>
                    </div>
                  </div>
                </div> 
            <button type="button" class="btn btn-default">Casas de Repuesto Valencia</button><br><br>
            <button type="button" class="btn btn-default">Casas de Repuesto Caracas</button><br><br>
            <button type="button" class="btn btn-default">Casas de Repuesto Los Teques</button>
          </div>
          <div class="col-sm-7">
            <div class="col-sm-7 img-thumbnail">
                <div><?php echo "<img class='img-responsive' src='images/".$res2['img_producto']."' uploaded/>";?></div>
                <div class="text-center"><?php echo $res1['nombre_division'];?>-<small><?php echo $res1['nombre_categoria'];?></small>-</div>
            </div>
            <div class="col-sm-4">
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['nombre_marca']."' />"; ?><br>
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['Nombre_modelo']."' />"; ?><br>
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['nombre_division']."' />"; ?><br>
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['nombre_categoria']."' />"; ?>
            </div>
          </div>
          </div><br><!--Fin row1-->
          <div class="col-sm-4 col-sm-offset-8">
            <button class="btn btn-default"><span class="glyphicon glyphicon-repeat"></span> Nueva Busqueda</button>
          </div>
        </div>
      </div><!--Fin container-->
    </div><!--Fin wrap-->

    <br>

    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/footer_common.php'; ?>
  </body>
</html>
