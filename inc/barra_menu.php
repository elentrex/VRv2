<!-- Fixed navbar -->
<div class="navbar navbar-inverse" role="navigation"><!-- navbar-inverse:black || nav-fixed-top:barra fija top-->
  <div class="container">

    <div class="navbar-header"><!--Boton de Ayuda-->

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
        <span class="sr-only">Menú</span>
      </button><!--Fin del Boton de ayuda-->

      <div class="logo col-xs-3"><!--Logo-->
        <a class="navbar-brand" href="index.php" alt="Venezolana de Repuestos" title="Venezolana de Repuestos"><span>Venezonala de Repuestos</span></a>
      </div><!--Fin del Logo-->

    </div>

    <div class="collapse navbar-collapse"><!--Menú-->

      <ul class="nav navbar-nav navbar-right"><!--Menu top-->
				<?php
				$pagina = basename($_SERVER['PHP_SELF']);

				if ($pagina == "index.php" || $pagina == "pagina-error.php"){ ?>
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="quienes.php"><span class="glyphicon glyphicon-user"></span> Quienes Somos</a></li>
        <li><a href="afiliacion.php"><span class="glyphicon glyphicon-usd"></span> Afiliación</a></li>
        <li><a href="tienda.php"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</a></li>
        <li><a href="contacto.php"><span class="glyphicon glyphicon-earphone"></span> Contacto</a></li>
        <li class="dropdown">
        <?php											
				}
				else if ($pagina == "quienes.php") { ?>
       	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="active"><a href="quienes.php"><span class="glyphicon glyphicon-user"></span> Quienes Somos</a></li>
        <li><a href="afiliacion.php"><span class="glyphicon glyphicon-usd"></span> Afiliación</a></li>
        <li><a href="tienda.php"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</a></li>
        <li><a href="contacto.php"><span class="glyphicon glyphicon-earphone"></span> Contacto</a></li>
        <li class="dropdown">
        <?php											
				}
				else if ($pagina == "afiliacion.php") { ?>
       	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="quienes.php"><span class="glyphicon glyphicon-user"></span> Quienes Somos</a></li>
        <li class="active"><a href="afiliacion.php"><span class="glyphicon glyphicon-usd"></span> Afiliación</a></li>
        <li><a href="tienda.php"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</a></li>
        <li><a href="contacto.php"><span class="glyphicon glyphicon-earphone"></span> Contacto</a></li>
        <li class="dropdown">
        <?php											
				}
				else if ($pagina == "tienda.php") { ?>
       	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="quienes.php"><span class="glyphicon glyphicon-user"></span> Quienes Somos</a></li>
        <li><a href="afiliacion.php"><span class="glyphicon glyphicon-usd"></span> Afiliación</a></li>
        <li class="active"><a href="tienda.php"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</a></li>
        <li><a href="contacto.php"><span class="glyphicon glyphicon-earphone"></span> Contacto</a></li>
        <li class="dropdown">
        <?php											
				}
				else if ($pagina == "contacto.php") { ?>
       	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="quienes.php"><span class="glyphicon glyphicon-user"></span> Quienes Somos</a></li>
        <li><a href="afiliacion.php"><span class="glyphicon glyphicon-usd"></span> Afiliación</a></li>
        <li><a href="tienda.php"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</a></li>
        <li class="active"><a href="contacto.php"><span class="glyphicon glyphicon-earphone"></span> Contacto</a></li>
        <li class="dropdown">
        <?php											
				}
				else if ($pagina == "buscatu.php" || $pagina == "vehiculos_v2.php" || $pagina == "camiones.php" || $pagina == "motos.php" || $pagina == "equipa.php" || $pagina == "gruas.php" || $pagina == "montacarga.php" || $pagina == "maquinar_pesa.php" || $pagina == "blindados.php" || $pagina == "autobuses.php" || $pagina == "lanchas.php" || $pagina == "aviones.php" || $pagina == "industria.php" || $pagina == "respuesta.php"){ ?>
       	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="quienes.php"><span class="glyphicon glyphicon-user"></span> Quienes Somos</a></li>
        <li><a href="afiliacion.php"><span class="glyphicon glyphicon-usd"></span> Afiliación</a></li>
        <li><a href="tienda.php"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</a></li>
        <li><a href="contacto.php"><span class="glyphicon glyphicon-earphone"></span> Contacto</a></li>
        <li class="dropdown active">  
        <?php } ?>      
          <a href="buscatu.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Otras Busquedas <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="vehiculos_v2.php">Vehiculos</a></li>
            <li><a href="camiones.php">Camiones</a></li>
            <li><a href="motos.php">Motos</a></li>
            <li><a href="equipa.php">Equipamiento</a></li>
            <li><a href="gruas.php">Gruas</a></li>
            <li><a href="montacarga.php">MontaCarga</a></li>
            <li><a href="maquinar_pesa.php">Maquinaria Pesada</a></li>
            <li><a href="blindados.php">Blindados</a></li>
            <li><a href="autobuses.php">Autobuses</a></li>
            <li><a href="lanchas.php">Lanchas</a></li>
            <li><a href="aviones.php">Aviones</a></li>
            <li><a href="industria.php">Industria</a></li>
            <!--
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>

      </ul>
    </div><!--Fin del Menú -->

  </div><!--Fin container-->
</div>

