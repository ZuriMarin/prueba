
    <form action="clase007.php" method="get">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName ">Nombre del paciente</label>
      <input type="name" class="form-control" id="inputName" placeholder="Nombre del paciente" pattern=[a-z|A-Z]{5,32} required>
     
    </div>
    <div class="form-group col-md-6">
      <label for="inputApellidos">Apellidos del paciente</label>
      <input type="text" class="form-control" id="inputApellidos" placeholder="Apellidos del paciente" pattern=[a-z|A-Z]{5,32} required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Genero</label>
      <select id="inputState" class="form-control" required>
        <option selected>Elegir...</option>
            <option>Masculino</option>
            <option>Femenino</option>
            </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Tipo de Sangre</label>
      <select id="inputState" class="form-control" required>
        <option selected>Elegir...</option>
            <option>O negativo  (O-)</option>
            <option>O positivo  (O+)</option>
            <option>A negativo  (A-)</option>
            <option>A positivo  (A+)</option>
            <option>B negativo  (B-)</option>
            <option>B positivo  (B+)</option>
            <option>AB negativo (AB-)</option>
            <option>AB positivo (AB+)</option>
            </select>
    </div>
   
    <div class="form-group col-md-6 m-4">
      <label for="inputAlergias">Alergias conocidas</label>
     
                 <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                         <label class="form-check-label" for="defaultCheck1">
                          Ampicilina
                         </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                        <label class="form-check-label" for="defaultCheck2">
                            Penicilina
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" >
                        <label class="form-check-label" for="defaultCheck3">
                            Insulina
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" >
                        <label class="form-check-label" for="defaultCheck4">
                            Sulfamidas
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" >
                        <label class="form-check-label" for="defaultCheck5">
                            Ninguna alergia conocida
                        </label>
                </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Domicilio</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Calle Limonarias #280"  required>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity"  placeholder="Veracruz" required>
      
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control" required>
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
      <input type="text" class="form-control" id="inputZip" pattern=[0-9]{5,5}  required>
      <small id="passwordHelpInline" class="text-muted">
      Debe ser de 6 digitos.
    </small>
    </div>
  </div>
  <div class="form-group col-md-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
       <a href=""> Acepto los terminos y condiciones.</a>
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</form>
