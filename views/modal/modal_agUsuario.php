<div class="modal fade bd-example-modal-lg" id="agUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form action="" method="POST" id="formUsuario">
      <div class="modal-body">
          <div class="row">
              <div class="col md-3">
                <div class="form-group">
                  <label for="nombre">Nombre Completo</label>
                  <input type="text" class="form-control m-3" id="nombrec" mane="nombrec" placeholder="">
                </div>
              </div>
          </div>
            <div class="row">
              <div class="col md-3">
                <div class="form-group">
                  <label for="telefono">Telefono</label>
                  <input type="text" class="form-control m-3" id="telefono" mane="telefono" placeholder="">
                </div>
              </div> 
              <div class="col md-3">
                <div class="form-group">
                  <label for="nivelusuario">Nivel</label>
                  <select class="form_control" id="nivelusuario" name="nivelusuario">
                    <option value="ventas">Agente de Ventas</option>
                    <option value="tecnico">Tecnico</option>
                    <option value="administrador">Administrador</option>
                  </select>
                </div>
              </div> 
          </div>
          <div class="row">
            <div class="col md-3">
              <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control m-3" id="usuario" mane="usuario" placeholder="">
              </div>
            </div>
            <div class="col md-3">
              <div class="form-group">
              <label for="cpassword">Contraseña</label>
              <input type="text" class="form-control m-3" id="password" mane="password" placeholder="">
              </div>
            </div>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>