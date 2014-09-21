<form role="form" class="form-horizontal" action="inc/valida.php" method="post" enctype="multipart/form-data" name="formular">
  <div class="form-group">
    <label for="inputEmail3" class="col-xs-4 control-label">Nombre*</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" requerid>
      </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-xs-4 control-label">Email*</label>
      <div class="col-xs-6">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-xs-4 control-label">Teléfono (opcional)</label>
      <div class="col-xs-5">
        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
      </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-xs-4 control-label">Comentarios</label>
      <div class="col-xs-7">
        <textarea class="form-control" id="inputEmail3" name="comentario" placeholder="Comentarios" row="5"></textarea>
      </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-xs-4 control-label">Solicitud</label>
      <div class="col-xs-5">
        <select class="form-control" name="solicitud">
          <option value="opcion1">Ejemplo 1</option>
          <option value="opcion2">Ejemplo 2</option>
        </select>
      </div>
  </div>
    <div class="col-xs-11 col-xs-offset-2">
      <p>(*) Requisitos para Afiliarse</p>
    </div>
  <div class="form-group">
    <div class="col-xs-offset-2">
      <input type="button" value="Enviar" class="btn btn-success col-xs-10" onclick="validacion()"></input>
    </div>
  </div>
</form>