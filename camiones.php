<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include 'inc/meta.php';?>
    <meta name="title" content="Repuestos para Camiones" />
    <title>Repuestos para Camiones</title>
    <?php include 'inc/header_common.php';?>
  </head>

  <body>
    <?php include 'inc/barra_menu.php'; ?>

		<!-- Begin page content -->
      <div class="container">
        <div class="row">
          <div class="page-header text-center">
              <h1>Repuestos de Camiones</h1>
          </div><!--Fin de page-header-->

          <div class="row"><!--Inicio Row1-->
            <div class="col-sm-5 col-sm-offset-2"><!--Imagen-->
              <img class="img-thumbnail" src="img/camion.png" alt="Camion" title="Camion">
          </div>

          <div class="col-sm-3">
            <form action="respuesta.php" method="post">
                <div>
                  <select class="form-control" name="marca" onChange="producto(this.value)">
                      <option value="">Marca del Vehículo</option>
                      <?php include "verficar.php" ?>
                  </select>
                  <br>
                </div>
                <div id="midiv">
                    <select class="form-control" disabled>
                        <option value="">Modelo del Vehículo</option>
                    </select>
                    <br>
                </div>
                <div id="midiv2">
                    <select class="form-control" disabled>
                        <option value="">División del Producto</option>
                    </select>
                    <br>
                </div>
                <div id="midiv3">
                    <select class="form-control" disabled>
                        <option value="">Categoría del Producto</option>
                    </select>
                    <br>
                </div>
                <div id="midiv4">
                    <select class="form-control" disabled>
                        <option value="">Ciudad</option>
                    </select>
                    <br>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-default">Buscar</button>
                </div>
                
                </form>
            </div>
          </div><!--Fin row1-->
        </div><!--Fin row-->
      </div><!--Fin container-->

    <?php include 'inc/footer.php'; ?>
    
    <?php include 'inc/footer_common.php'; ?>
  </body>
</html>
