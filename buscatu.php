<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include 'inc/meta.php';?>
    <meta name="title" content="Busca tu Repuesto" />
    <title>Venezolana de Repuestos</title>
    <?php include 'inc/header_common.php';?>
  </head>

  <body>
    <!-- Wrap all page content here -->
    <div id="wrap">
      <?php include 'inc/barra_menu.php'; ?>

      <!-- Begin page content -->
      <div class="container">
        <div class="row">
          <div class="text-center">
              <h1>Selecciona el Repuesto</h1>
          </div><!--Fin de page-header-->

          <div class="row"><!--Inicio Row1-->
            <div class="col-sm-3">
              <a href="vehiculos_v2.php" target="_blank"><h3>Vehículos</h3>
              <img class="img-thumbnail camcolor" src="img/frente-jetta.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="camiones.php" target="_blank"><h3>Camiones</h3>
              <img class="img-thumbnail camcolor" src="img/camion.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="motos.php" target="_blank"><h3>Motos</h3>
              <img class="img-thumbnail camcolor" src="img/motos.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="equipa.php" target="_blank"><h3>Equipamiento</h3>
              <img class="img-thumbnail camcolor" src="img/equipamientos3.png"></a>
            </div>
          </div><!--Fin row1-->
        
          <div class="row"><!--Inicio Row2-->
            <div class="col-sm-3">
              <a href="gruas.php" target="_blank"><h3>Gruas</h3>
              <img class="img-thumbnail camcolor" src="img/gruas4.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="montacarga.php" target="_blank"><h3>MontaCarga</h3>
              <img class="img-thumbnail camcolor" src="img/MONTACARGAS.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="maquinar_pesa.php" target="_blank"><h3>Maquinaria Pesada</h3>
              <img class="img-thumbnail camcolor" src="img/Montacargas2.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="blindados.php" target="_blank"><h3>Blindados</h3>
              <img class="img-thumbnail camcolor" src="img/blindado.png"></a>
            </div>
          </div><!--Fin row2-->

          <div class="row"><!--Inicio Row3-->
            <div class="col-sm-3">
              <a href="autobuses.php" target="_blank"><h3>Autobuses</h3>
              <img class="img-thumbnail camcolor" src="img/autobuses2.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="lanchas.php" target="_blank"><h3>Lanchas</h3>
              <img class="img-thumbnail camcolor" src="img/lancha01.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="aviones.php" target="_blank"><h3>Aviones</h3>
              <img class="img-thumbnail camcolor" src="img/Airbus.png"></a>
            </div>
            <div class="col-sm-3">
              <a href="industria.php" target="_blank"><h3>Industria</h3>
              <img class="img-thumbnail camcolor" src="img/industria.png"></a>
            </div>
          </div><!--Fin row3-->
        </div><!--Fin row-->
      </div><!--Fin container-->
    </div><!--Fin wrap-->

    <br>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/footer_common.php'; ?>
  </body>
</html>
