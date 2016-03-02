<form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data" name="formular">
  <div class="form-group">
      <div class="col-xs-10 col-xs-offset-1">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre*" requerid>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-10 col-xs-offset-1">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-10 col-xs-offset-1">
        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-10 col-xs-offset-1">
        <textarea class="form-control" id="inputEmail3" name="comentario" placeholder="Comentarios" rows="4"></textarea>
      </div>
  </div>
    <div class="col-xs-10 col-xs-offset-2">
      <p>(*) Requisitos para Afiliarse</p>
    </div>
  <div class="form-group">
    <div class="col-xs-offset-2">
      <button type="submit" name="Enviar" id="enviar" class="btn btn-success col-xs-10" onclick="ajaxget()">Registrar</button>
      <!--<button type="submit" name="enviar" id="enviar" class="btn btn-block btn-success" onclick="ajaxget()">ENVIAR</button>-->
    </div>
  </div>
</form>