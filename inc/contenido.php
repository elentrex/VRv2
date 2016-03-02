<?php
		$pagina = basename($_SERVER['PHP_SELF']);

		if ($pagina == "index.php") { ?>
		<article class="container">
		<div class="row">
			<div class="col-xs-12 enlace col-sm-6 col-sm-push-3">
				<!-- <a href="buscatu.html"><span class="img-icon"><img src="img/109.png"><h2>BUSCA TU REPUESTO</h2><img src="img/109.png"></a> -->
				<!--<a href="buscatu.html" target="_blank"><p class="text-center lead">BUSCA TU REPUESTO AQUI</p></a>-->            
				<a href="buscatu.php" target="_blank"><button type="button" class="btn btn-lg btn-danger btn-group btn-group-justified form-control">BUSCA TU REPUESTO AQUI</button></a>
			</div>
			<div class="clearfix"></div><br>
			<div class="col-xs-12 col-sm-6 col-sm-push-3"><!--Imagen Vehiculo--> 
					<!--<span class="img-cen camcolor"><img start="fileopen" dynsrc="video/Video_motor_tecnologia.mp4"></span>-->
                    <video src="video/Video_motor_tecnologia.mp4" width="550" controls></video>
			</div>
			<div class="col-xs-12 col-sm-3 col-sm-pull-6">
				<a href="http://www.toyota.com.ve" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/Toyota-logo2.jpg" alt="Toyota" title="Toyota"></span></a>
				<!--<a class="btn btn-xs btn-default" href="#" role="button">Ir a la web &raquo;</a>-->
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="http://www.mitsubishi-motors.com.ve/" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/mitsubishi.jpg" alt="Mitsubishi" title="Mitsubishi"></span></a>
				<!--<p><a class="btn btn-sm" href="#" role="button">Visitar Web &raquo;</a></p>-->
			</div>
			<div class="col-xs-12 col-sm-3 col-sm-pull-6">
				<a href="http://www.acura.com/" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/Acura.jpg" alt="Acura" title="Acura"></span></a>
				<!--<p><a class="btn btn-default" href="#" role="button">Ver Site &raquo;</a></p>-->
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="http://www.orizorca.com.ve/" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/Imagen-Orizorca.jpg" alt="Industrias Orizorca" title="Industrias Orizorca"></span></a>
				<!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-3">
				<a href="http://www.grupocaracas.com.ve/" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/GrupoCaracas.jpg" alt="Grupo Caracas" title="Grupo Caracas"></span></a>
				<!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="http://www.cheryinternational.com/" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/chery-logo-new.jpg" alt="Chery" title="Chery"></span></a>
				<!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="http://www.chevrolet.com.ve/" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/Chevrolet-Logo-Actual.jpg" alt="Chevrolet" title="Chevrolet"></span></a>
				<!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="http://www.ford.com.ve/" target="_blank"><span class="img"><img class="img-thumbnail img-responsive camcolor tamano_ima" src="img/ford.jpg" alt="Ford" title="Ford"></span></a>
				<!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			</div>
		</div><!--Fin row-->
		</article><br>
		
		<?php
			/*****************************************************
			*****************QUIENES.PHP**************************
			*****************************************************/			
		}else if ($pagina == "quienes.php") { ?>
		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<img class="img-responsive text-center img-quienes" src="img/brioni.jpg" alt="quienes somos" title="quienes somos">
				</div>
					<div class="col-sm-9">
						<blockquote>
							<h4>QUIÉNES SOMOS</h4>
							<small class="text-justify">Somos un buscador inteligente de repuestos donde ayudaremos de una manera más rápida y precisa a conseguir cualquier repuesto: Automotriz como Industrial, donde daremos de forma integral una mano amiga sin costo alguno a nuestros visitantes, para que su búsqueda sea agradable, rápida y didáctica.</small>

							<h4>MISIÓN</h4>
							<small class="text-justify">Satisfacer las necesidades de búsqueda de Repuestos de Venezuela y Latinoamerica suministrando información oportuna con una plataforma de punta y con un equipo de gente altamente calificada.</small>

							<h4>VISIÓN</h4>
							<small class="text-justify">Ser por referencia obligada el principal buscador inteligente de repuesto en Venezuela y Latinoamerica.</small>
						</blockquote>
					</div>
			</div><!--Fin Row--><br><br><br><br>
		</div><!--Fin container-->
		
		<?php
			/*****************************************************
			*****************AFILIACION.PHP***********************
			*****************************************************/
		}else if ($pagina == "afiliacion.php") { ?>
		  <!-- Begin page content -->
      <div class="container">
        <div class="row">
          <div class="col-xs-4 col-xs-offset-4 formulario">
            <div class="text-center">
              <h2>Afiliación</h2>
            </div>
                <?php include 'inc/formulario.php';?>
            
          </div><!--Fin Contenido-->
        </div><!--Fin row-->
      </div><!--Fin container-->
      
    <?php
			/*****************************************************
			*****************CONTACTO.PHP*************************
			*****************************************************/																	
		}else if ($pagina == "contacto.php") { ?>
		  <!-- Begin page content -->
      <div class="container">
        <div class="row">
          <div class="col-xs-4 col-xs-offset-4 formulario">
            <div class="col-xs-5">
              <img src="img/LogoDefinido2.jpg" alt="" class="img-circle img-responsive"> 
            </div>
            <div class="col-xs-6 col-xs-offset-1 info-contacto">
              <h3>Gilberto Meza</h3><br>
              <p>Presidente<br>
              +58 424 3018416<br></p>
             </div>
          </div>

          <div class="col-xs-4 col-xs-offset-4 formulario">
            <div class="col-xs-5">
              <img src="img/LogoDefinido2.jpg" alt="" class="img-circle img-responsive"> 
            </div>
            <div class="col-xs-6 col-xs-offset-1 info-contacto">
              <h3>Argenis Boyer</h3><br>
              <p>VicePresidente<br>
              +58 414 0786800<br></p>
            </div>
          </div>
          <div class="col-xs-4 col-xs-offset-4 formulario">
            <div class="col-xs-5">
              <img src="img/preview.jpg" alt="" class="img-circle img-responsive"> 
            </div>
            <div class="col-xs-6 col-xs-offset-1 info-contacto">
              <h3>Oficina</h3><br>
              <p>+58 243 2697427</p>
            </div>
          </div>
        </div><!--Fin row-->
      </div><!--Fin container-->
      
		<?php
			/*****************************************************
			*****************BUSCATU.PHP**************************
			*****************************************************/
		} else if ($pagina == "buscatu.php") { ?>
		      <!-- Begin page content -->
			<div class="container"><!--container-fluid-->
				<div class="row">
					<div class="text-center"><!--page-header-->
						<h1><strong>Selecciona el Repuesto</strong></h1>
          </div><!--Fin de page-header-->

          <div class="row"><!--Inicio Row1-->
            <div class="col-sm-3 opcion-busca">
              <h3>Vehículos</h3>
							<a href="vehiculos_v2.php"><img class="img-thumbnail camcolor" src="img/frente-jetta.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
							<h3>Camiones</h3>
              <a href="camiones.php"><img class="img-thumbnail camcolor" src="img/camion.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>Motos</h3>
              <a href="motos.php"><img class="img-thumbnail camcolor" src="img/motos.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>Equipamiento</h3>
              <a href="equipa.php"><img class="img-thumbnail camcolor" src="img/equipamientos3.png"></a>
            </div>
          </div><!--Fin row1-->
        
          <div class="row"><!--Inicio Row2-->
            <div class="col-sm-3 opcion-busca">
              <h3>Gruas</h3>
              <a href="gruas.php"><img class="img-thumbnail camcolor" src="img/gruas4.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>MontaCarga</h3>
              <a href="montacarga.php"><img class="img-thumbnail camcolor" src="img/MONTACARGAS.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>Maquinaria Pesada</h3>
              <a href="maquinar_pesa.php"><img class="img-thumbnail camcolor" src="img/Montacargas2.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>Blindados</h3>
              <a href="blindados.php"><img class="img-thumbnail camcolor" src="img/blindado.png"></a>
            </div>
          </div><!--Fin row2-->

          <div class="row"><!--Inicio Row3-->
            <div class="col-sm-3 opcion-busca">
              <h3>Autobuses</h3>
              <a href="autobuses.php"><img class="img-thumbnail camcolor" src="img/autobuses2.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>Lanchas</h3>
              <a href="lanchas.php"><img class="img-thumbnail camcolor" src="img/lancha01.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>Aviones</h3>
              <a href="aviones.php"><img class="img-thumbnail camcolor" src="img/Airbus.png"></a>
            </div>
            <div class="col-sm-3 opcion-busca">
              <h3>Industria</h3>
              <a href="industria.php"><img class="img-thumbnail camcolor" src="img/industria.png"></a>
            </div>
          </div><!--Fin row3-->
        </div><!--Fin row-->
      </div><!--Fin container--><br><br>
      
      <?php
			/*****************************************************
			*****************VEHICULOS_V2.PHP*********************
			*****************************************************/
		} else if ($pagina == "vehiculos_v2.php") { ?>
			<div class="container"><!--container-fluid-->
				<div class="row">
					<div class="text-center"><!--page-header-->
						<h1><strong>Repuestos de Vehículos</strong></h1><br><br>
          </div><!--Fin de page-header-->

          <div class="row"><!--Inicio Row1-->
            <div class="col-sm-5 col-sm-offset-2"><!--Imagen-->
              <img class="img-thumbnail" src="img/frente-jetta.png" alt="Vehículo" title="Vehículo">
            </div>

            <div class="col-sm-3">
              <form action="respuesta.php" method="post">
                  <div>
                    <select class="form-control" name="marca" onChange="producto(this.value)" required>
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
                          <option value="">Estado</option>
                      </select>
                      <br>
                  </div>
                  <div class="text-center" id="btn-busqueda">
                    <button type="reset" class="btn btn-default"><a href="buscatu.php"><span class="glyphicon glyphicon-arrow-left"></span>Atras</a></button>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>Buscar</button>
                  </div>
              </form>
            </div>
          </div><!--Fin row1-->
        </div>
      </div><!--Fin container-->
      
      <?php
			/*****************************************************
			*****************RESPUESTA.PHP************************
			*****************************************************/
			} else if ($pagina == "respuesta.php") { ?>
			<div class="container"><!--container-fluid-->
				<div class="row">
					<div class="text-center"><!--page-header-->
						<h1><strong> <?php echo $res1['nombre_division'];?><small><?php echo $res1['nombre_categoria'];?></small></strong>
         		<!--<button class="btn btn-default" type="button"><a href="vehiculos_v2.php"><span class="glyphicon glyphicon-repeat"></span>nueva busqueda</a></button>--></h1><br>
          </div>
				
          <div class="col-sm-3 col-md-4">
           	<h4><strong>Casas de Repuestos en <?php echo $res3['nombre_estado'];?>						
           	</strong></h4>
            
            <!--ZONA DE CASAS DE REPUESTOS-->
            <div class="busca-respu col-md-12 col-lg-10">
            	<img src="<?php echo $res3['logo_small'];?>">
							<span>SUREPUESTO CAGUA</span><br>
							<span>Calle Boyaca entre Flores y Sabana Larga</span><br>
							<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal">Visitar</button>
          	</div><br>
           
                <!--ZONA DE CASAS DE REPUESTOS BTN VISITAR-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header"><!--Cabecera-->
                        <button type="button" class="close" data-dismissw="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center" id="myModalLabel">Casa de Repuestos</h4>
                      </div>
                      <div class="modal-body row"><!--Cuerpo-->
                        <div class="col-sm-6">
                            <span class="img"><img class="img-thumbnail" src="<?php echo $res3['logo_grande'];?>"></span>
                        </div>
                        <div class="col-sm-6">                       
                              <div><h4>SUREPUESTO CAGUA C.A</h4></div>
                              <p>Calle Boyaca entre Flores y Sabana Larga</p>
                              <p>Local Nro 104-31-15 </p>
                              <p>Cagua - Estado (2122) - Aragua	</p>
                              <p>0244-4475932 / 0412-5332049</p>
                              <a href="#" target="_blank">www.surepuesto.com.ve</a>                        
                        </div>


                      </div>
                      <div class="modal-footer"><!--Botones-->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button> 
                      </div>
                    </div>
                  </div>
                </div> 
                
                
            <!--<button type="button" class="btn btn-default">Casas de Repuesto Valencia</button><br><br>
            <button type="button" class="btn btn-default">Casas de Repuesto Caracas</button><br><br>
            <button type="button" class="btn btn-default">Casas de Repuesto Los Teques</button>-->
          </div>
          
          <!--ZONA DE RESPUESTA DEL REPUESTO-->
          <div class="col-sm-7">
            <div class="col-sm-7 ">
                <div class="img-thumbnail">
                  <?php echo "<img class='img-responsive' src='images/".$res2['img_producto']."' uploaded/>";?></div>
                <div class="text-center" id="btn-busqueda">
                  <button type="reset" class="btn btn-default"><a href="vehiculos_v2.php">
                    <span class="glyphicon glyphicon-arrow-left"></span>Atras</a>
                  </button>
                </div>
            </div>
            
            
            <!--<div class="col-sm-4">
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['nombre_marca']."' />"; ?><br>
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['Nombre_modelo']."' />"; ?><br>
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['nombre_division']."' />"; ?><br>
                <?php echo "<input type='text' class='form-control text-center' disabled value='".$res1['nombre_categoria']."' />"; ?>
            </div>
          </div>-->
          
          </div><br>
          

        </div><!--Fin row-->
      </div><!--Fin container-->
      <?php
			/*****************************************************
			*****************PAGINA-ERROR.PHP*********************
			*****************************************************/
			} else if ($pagina == "pagina-error.php") { ?>
        <div class="row">
          <div class="col-xs-6 col-xs-offset-3">
            <div class="text-center">
              <h2>No se encuentra su producto</h2>
              <img src="img/alert_97381.jpg" /><br><br>
                <div class="text-center" id="btn-busqueda">
                  <button type="reset" class="btn btn-default"><a href="vehiculos_v2.php"><span class="glyphicon glyphicon-arrow-left"></span>Atras</a></button>
                </div>
            </div><br>
          </div><!--Fin Contenido--><!--Fin row-->
      </div><!--Fin container-->
      <?php
      }
?>
		      
		
 