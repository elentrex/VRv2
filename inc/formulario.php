<form role="form" class="form-horizontal" action="" method="post" name="formular">
  <!-------Datos del Formulario---------->
  <!--Nombre de la Empresa-->
  <div class="form-group">
      <div class="col-xs-9 col-xs-offset-1">
        Nombre de la Empresa *
        <input type="text" class="form-control" id="nombre" name="nombre" title="Colocar el Nombre de la Empresa" required="required">
      </div>
  </div>
  
  <!--Rif-->
  <div class="form-group">
      <div class="col-xs-4 col-xs-offset-1">
        Rif *
        <input type="text" class="form-control" id="rif" name="rif" title="Use el siguiente formato: J123456789" pattern="^[J][0-9]{9}$"required="required">
      </div>
      <div class="col-xs-7 ">
        Correo Electronico *
        <input type="email" class="form-control" id="email" name="email" title="Use el siguiente formato: direccion@mail.com" required="required">
      </div>
  </div>
    
  <!--Dirección-->
  <div class="form-group">
      <div class="col-xs-11 col-xs-offset-1">
        Dirección
        <input type="text" class="form-control" id="direccion" name="direccion">
      </div>
  </div>
  
  <!--Telefono-->
  <div class="form-group">
      <div class="col-xs-4 col-xs-offset-1">
        Teléfono
        <input type="tel" class="form-control" id="telefono" name="telefono">
      </div>
      <div class="col-xs-7">
        Pagina Web
        <input type="text" class="form-control" id="paginaweb" name="paginaweb" pattern="/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/ ">
      </div>
  </div>
  
    <div class="col-xs-10 col-xs-offset-1">
      <p>(*) Requisitos para Afiliarse</p>
    </div>
  <div class="form-group">
    <div class="col-xs-7 col-xs-offset-1">
      <button class="btn btn-success col-xs-10" id="validacion">Registrar</button>
      <!--<button type="submit" name="enviar" id="enviar" class="btn btn-block btn-success" onclick="ajaxget()">ENVIAR</button>-->
    </div>
  </div>
</form>