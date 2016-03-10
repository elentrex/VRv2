<form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data" name="formular">
  <div class="form-group">
      <div class="col-xs-7">
        Nombre del Cliente *
        <input type="text" class="form-control" id="nombre" name="nombre" requerid>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-7">
        Correo Electronico *
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="col-xs-4">
        Teléfono
        <input type="tel" class="form-control" id="telefono" name="telefono">
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-11">
        Dirección
        <input type="text" class="form-control" id="direccion" name="direccion">
      </div>
  </div>
  
    <div class="col-xs-10">
      <p>(*) Requisitos para Afiliarse</p>
    </div>
  <div class="form-group">
    <div class="col-xs-7">
      <button type="submit" name="Enviar" id="enviar" class="btn btn-success col-xs-10" onclick="ajaxget()">Registrar</button>
      <!--<button type="submit" name="enviar" id="enviar" class="btn btn-block btn-success" onclick="ajaxget()">ENVIAR</button>-->
    </div>
  </div>
</form>