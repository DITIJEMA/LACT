<form method="POST" action="../../../Backend/controlador/almacenista/almacenista_con.php" class="row g-3 needs-validation" novalidate>
<link href="../Dashboard/boton.css" rel="stylesheet" /> 
<input type="hidden" value="1" name="opcion">

      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_m"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="salario">Salario</label>
        <input type="number" class="form-control" id="validationCustom02" name="salario"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="telefono">Telefono</label>
        <input type="tel" class="form-control" id="validationCustom02" name="telefono"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="domicilio">Domicilio</label>
        <input type="Text" class="form-control" id="validationCustom02" name="Domicilio"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="email" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" id="validationCustom02" name="contraseña" placeholder="contraseña" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <button type="submit" name="boton" class="boton cuatro">Registrar</button>
      </div>

    </form>