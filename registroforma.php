
    <form action="clase007.php" method="get">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo electrónico</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Correo electrónico" required>
     
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Confirmar correo electrónico</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Correo electrónico" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Ingrese un nombre de usuario valido.
        </div>
      </div>
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirmar contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Domicilio</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Calle Limonarias #280" required>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity"  placeholder="Veracruz" required>
      
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control">
        <option selected>Elegir...</option>
            <option>Aguascalientes</option>
            <option>Baja California</option>
            <option>Baja California Sur</option>
            <option>Campeche</option>
            <option>Chiapas</option>
            <option>Chihuahua</option>
            <option>Coahuila</option>
            <option>Colima</option>
            <option>Distrito Federal</option>
            <option>Durango</option>
            <option>Estado de México</option>
            <option>Guanajuato</option>
            <option>Guerrero</option>
            <option>Hidalgo</option>
            <option>Jalisco</option>
            <option>Michoacán</option>
            <option>Morelos</option>
            <option>Nayarit</option>
            <option>Nuevo León</option>
            <option>Oaxaca</option>
            <option>Puebla</option>
            <option>Querétaro</option>
            <option>Quintana Roo</option>
            <option>San Luis Potosí</option>
            <option>Sinaloa</option>
            <option>Sonora</option>
            <option>Tabasco</option>
            <option>Tamaulipas</option>
            <option>Tlaxcala</option>
            <option>Veracruz</option>
            <option>Yucatán</option>
            <option>Zacatecas</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Código Postal</label>
      <input type="text" class="form-control" id="inputZip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Acepto los terminos y condiciones.
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</form>
