<div class="container"><!--container-fluid-->
	<div class="row">
		<div class="text-center"><!--page-header-->
			<h1><strong> <?php echo $res1['nombre_division'];?><small><?php echo $res1['nombre_categoria'];?></small></strong>
			<!--<button class="btn btn-default" type="button"><a href="vehiculos_v2.php"><span class="glyphicon glyphicon-repeat"></span>nueva busqueda</a></button>--></h1><br>
		</div>

		<div class="col-sm-3 col-md-4">
			<h4><strong>Se encuentra en Casas de Repuestos en <?php $res4['nombre_estado']; ?> 		
			</strong></h4>

			<div class="busca-respu col-md-12 col-lg-10">
				<img src="<?php echo $res3['logo_small'];?>">
				<span>SUREPUESTO CAGUA</span><br>
				<span>Calle Boyaca entre Flores y Sabana Larga</span><br>
				<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal">Visitar</button>
			</div><br>


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
		<div class="col-sm-7">
			<div class="col-sm-7 img-thumbnail">
					<div><?php echo "<img class='img-responsive' src='images/".$res2['img_producto']."' uploaded/>";?></div>
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